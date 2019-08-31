<?php

return [
    'alipay' => [
        'app_id' => '2016092700611783',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzFBnzojBiBR3nnqYrP0AJSNDPFsJ3HECBo/pQ8ERTzC7nK2QLPeDUskVc67fpQE29DGgI1/IgsQTkg4BjpWc2TYlCWRFHg5KF41ouugkaqv/t51756XUUjHZKbMWaaVbibwIArjy6HZfh6j79HXOhwDcwtJzEIXtIlVGsuASlVpwikME0oIGkbcNkrA377k8BSykdKXPnOG2FfndG2op+neJ0w8pLw2c4ZpdHrVh7lV3J7rTrCM9OFfJbKJaIE4/y4+4JEsFWAergE1TdB1cTSAm423mNA3PJ3vA1HkDs5PZoBIAu0+2N02s2AmWbL+nuFxH833OoahgEbus0JoA+wIDAQAB',
        'private_key' => 'MIIEogIBAAKCAQEAmRkqD5Oe6LnTJoR388sX8mcsUSZ0ZTSG0BCF6BzP8qtd4ntk1IRk3ywhyyAy0zKHPneqgv/RpOaTtLQ+4vwSTn/wgmrzghTvi5FDfpJ9hCMQq0llI67nt3zgZ2EbJ8n9PyJA8U2dkDEI+lIcgbpwdAN+JtGOBEuc/x24G7XutwtwlQVkxegnZuskAMO76HrAcHV6N5dd9C7qsFR9rY9MAlVA1zuLi631hJNq3FCJ2ylrhH3CEVvEyEHsBX60vF1kF3qSIdfUQnixK30nC4Dw/xL1yfX4bJpIVcfcwM/3guz2gbKGgHDGrPqzECyCrzlV/PTjYFxOebXwVvyIm//nVQIDAQABAoIBAA+OSgLJKhVVhEnend2MnkNIDm20bZE29BfCBgkenFZ46RIxHX6mcSVn84sTG3bwJGPJfu7OlXue3hU3V0hy+l01jLeDrHhkLi7NNMFwmwZJFdGBpKAqjmrLanW2nS6+zFeU4GpkS4UyJkpg+3qG+hQforrJAhgXor0dRO6z3qyEec3VNR02qC6wvi0kPPvQzPht+qEGKmYKxqIT9O2D0o0Luv2fpgjxR+5REP/kJRno2HRsbU4uJuA2EFSVszcchznqx7v1q7jpgV3s9bgrUBMQJ5xeZmDX9nlwFteLW702XsItgfoNHUfEBqQi8bTozffbxLRtJ/EzzypfXevD96UCgYEAy4RMjepIPFNxzJpRUQYafb9f7fn90v1mHfYTIYFvTEsAu2CAckRXrtIiaorihmqaxoRC19io12oEN+RoEXIO53wy7gEQtNoCogOEfx6cBsvfll34t1VLvYiif2GI1UXb45epekGSwKBKY4jTeBi6qB1PAcdpFKgcYzGgxiJASIcCgYEAwJRaxLIwzJ1qKTuuWOPsDUir8HbtkMyuZqnuqpSWZ48bUKC5zgVHGHbQhd/5rnnTBdTenuyjgkl7xSxtpRDhfANFbL1sIzEN5zIvVld/ro7/I7x9tMKjuOtDuZNS2Swve//mXX7CD9uBvTQrpQ/1efylIQ+1qZnJ0rkUPf3itEMCgYB+15AXCyPGZYORr8RqqVEtem9BlQO70q8okUvPICrL9BsarcSgczPrA5DrsnAIsryQabJ3cNOanrrOUw8BgIMFh4T+ja9p6E6nx2V3DQ7VtY8+2oa/TOwNzvDoT1PHCOlJaib4yZG7eKukaYzTVyZOzSWGyFAXzccTk8TOeF50VQKBgHOtKVCZUGK383rNFI7kaXgZPN52MYEW0XNtg6UHF8kg1uF5ieJMnUX+qIah4NKC7tTD5u1Da3vpM+VeKIZMO4VIWb1Vks0YvCcxp+mPKWzrDCqlIEUh3UJIXyfrbIpy1hr/vZpPd7YavjWuTsEZcvRRY8cWLqKvc+GVtqj+Bd0NAoGAKXyPf2zug/uRBOKzff4M7VIm6rHTDRyZbvObTapdkn+GASbYoGn9qlHGtjO258il92QXvEhETbRisdZlf2Kk/anpDDl+PK75CbdtgqSa2xEcL6quv9oEQWLLjqWmfo8fQ3xGu7PlYLXD8fOj8f84hCzdeh4C6wNlPugPHQKYgSc=',
'log' => [
    'file' => storage_path('logs/alipay.log'),
],
    ],

    'wechat' => [
    'app_id' => '',
    'mch_id' => '',
    'key' => '',
    'cert_client' => '',
    'cert_key' => '',
    'log' => [
        'file' => storage_path('logs/wechat_pay.log'),
    ],
],
];
