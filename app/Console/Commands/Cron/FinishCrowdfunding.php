<?php

namespace App\Console\Commands\Cron;

use App\Jobs\RefundCrowdfundingOrders;
use App\Models\CrowdfundingProduct;
use App\Models\Order;
use App\Services\OrderService;
use Carbon\Carbon;
use Illuminate\Console\Command;

class FinishCrowdfunding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:finish-crowdfunding';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '结束众筹';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        CrowdfundingProduct::query()
            ->where('end_at', '<=', Carbon::now())
            ->where('status', CrowdfundingProduct::STATUS_FUNDING)
            ->get()
            ->each(function (CrowdfundingProduct $product) {
                if ($product->target_amount > $product->total_amount) {
                    $this->crowdfundingFailed($product); //众筹失败
                } else {
                    $this->crowdfundingSucceed($product);//众筹成功
                }
            });
    }

    public function crowdfundingSucceed(CrowdfundingProduct $product)
    {
        $product->update([
            'status' => CrowdfundingProduct::STATUS_SUCCESS,
        ]);
    }

    public function crowdfundingFailed(CrowdfundingProduct $product)
    {
        $product->update(['status' => CrowdfundingProduct::STATUS_FAIL]);
        dispatch(new RefundCrowdfundingOrders($product));

    }
}
