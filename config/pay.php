<?php

return [
    'alipay' => [
        'app_id'         => '2016101800717534',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3LZ4LRj6wFFipOjLaItFPHaIhnn8HGU6TuYIw6vfubWIZG1ym1Vsg/xLt8ZdeD973Xh2fKu9KOM0es+zYQVEwmZqtPezfx6mQ3YgrpAhqqludaR30KDTjQqnoQQKo7Uz4xrNcRsUYjuIWsl2dq1yYKTL55ptHoy4Ms84ylwZ7o4A4ALVFpld/AheYhk7TEaZAJC5hEHVXjEJh3tRHLNLZhtugysb2zgnYbaxOng3U0GXkjY6ztBx/5O/Vy9gTmi3JC5R6bsi5BQwUieu+bXPqGgnUGE6MY9d6TYx5eY7cSR+qW/1xlEdzua+CTd35UIcuI5E7yn3LkLdLLC5gE8XvQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAqknMwTGxhrX8K7kISZjborf5tYGxOWwXN8gdeIYHND9IDgsQr+BgZy6GENP+ArgS/EFQF7gs3dyW2pGBSUwwtEEQjXIzbIitD4DuIIm/jFKRFytCA17i8r7DfTCT7Ca2P2a9GTEREFlVNiP8g4YLBlmaDKOMQhI+sa/GDUwRwGXjX+j9kHbefAThs8DvC9dDmozDWfwfpLc0ga3KliI5WTbX6RcWLLFg3XwUAjIeS3pfPrxmAnU6M1n7lShaPo2TpqnwNO4uZ+HVhQOrHPySMw3QiUuNH7DuqCujLageSiI04W6qw8jPW39fI65DpTAWQiBs+I6FbM4rOuPX2b+goQIDAQABAoIBAERLjN7+uyA35Ib0kqpRr+S2vGNbPGS3QSiSDZ/EwSbnKlLXhT3EU2WOdx5Qp1MX2CVrXF/m8beZPLc0HBH1iKMCZU0VPCKPPjk1kEtkc3onsyEDrFoFuCd68pRG40yWygjrf3OXBiz0ZwRrsl5daBaH4Qyomxv0jUheIqQ6mfP7Ps8//IjyqvqQsuwbSb4uOWX0ibMiKxjiZY5tFvBGWSKB/H1nGSQvm5Qge9vIlhz4nf/hHy9W3iKVAyNE+luSQ7JuesPrDEE3rJ4UFktT0OYRr8Bbehaod+GUe9vCobwuWnJNuk9SBCyLxSk4GSv2mvXOXQS14gvZ5zBYsZLsuXECgYEA+nvR3uqLIen69wHxuNDg0cerVI8ZBqJNDcE6FOSghliIJUN91xu8KkRNcFIAT0dh5RtFLcd1clQzhNTUMeREikCuhxxcuLX2De6PZ4orZcGUcB+kjnLCOcSYsxSl7hZmMjukFdgx9Ua6tIdSUBiX61tCO6sOT46n9t41Qa3tdwsCgYEArgnadmnugN+IDT5QL/GQajmYxwm6tuF6zVUsAwOKuVg7Y4bnI8NOHsIMtMnnOPgvvuV9ikYVHa8zL83YrjXuMPlXz00bN6FxKFhOviT4jxuzNoz+5s/QmwAMq8LYhsfbHPBHhHgmf7XJXSaI4werEr5CfBL+uPyxkgljfmjs4oMCgYEAlw+9jlac+iMGO5lski1GqL1mUmTKjvmqxrTVtmv7c4pI8VA2wFf1rvfqS+boUOeX3ngHzIgSCJVHTMCeCEjGHSrNFqbANJVogxZwXd0yNvf78XLj5xTGldg+zyGQwHm5wGm/l3z/BBFX4DAMMEnktQggdaO/ybMbEQMJ00Z1g+kCgYAjA4Z5Jky+jrovd+boDmBwjo/nE1UGMAzlvInzPUYujcq89koQTt2roHyv7qLfOkdYz5DXPcxHwZS5vF8ohV8baT66TRf5tDgw1rtY09VR7U+73Nf3lb2xQWxLLhMj4pd5lfm9c/LC5M7TN8p4anWHetGjZqrqiqQq7kqfBvsJgwKBgQDpA6UF0JXM2sim21Fsbhc09EEJQqda9mZkIgvekphq9Qf+UeHqrqDEjwRRRP8ZhZuA6Xrw7lbbESM/URc59epUhK5If3jxsC8PxmCyMEVpJP9PI+2/Ccvnr/ma4ghAztqgyR494hHyOzL+teBaEjkthzQ95ejh0RnUUJA7omuHbA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];