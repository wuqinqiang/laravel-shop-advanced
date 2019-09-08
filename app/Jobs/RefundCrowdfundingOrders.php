<?php

namespace App\Jobs;

use App\Models\CrowdfundingProduct;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class RefundCrowdfundingOrders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $crowdfunding;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(CrowdfundingProduct $product)
    {
        $this->crowdfunding=$product;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // 如果众筹的状态不是失败则不执行退款，原则上不会发生，这里只是增加健壮性
        if($this->crowdfunding->status != CrowdfundingProduct::STATUS_FAIL){
            return ;
        }
        $orderService = app(OrderService::class);

        // 将定时任务中的众筹失败退款代码移到这里
        Order::query()
            ->where('type', Order::TYPE_CROWDFUNDING)
            ->whereNotNull('paid_at')
            ->whereHas('items', function ($query) use ($product) {
                $query->where('product_id', $product->product_id);
            })
            ->get()
            ->each(function (Order $order) use ($orderService) {
                //调用退款逻辑
                $orderService->refundOrder($order);
            });
    }
}
