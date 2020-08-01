<?php

return [
    'alipay' => [
        'app_id'         => '2016101800717534',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3LZ4LRj6wFFipOjLaItFPHaIhnn8HGU6TuYIw6vfubWIZG1ym1Vsg/xLt8ZdeD973Xh2fKu9KOM0es+zYQVEwmZqtPezfx6mQ3YgrpAhqqludaR30KDTjQqnoQQKo7Uz4xrNcRsUYjuIWsl2dq1yYKTL55ptHoy4Ms84ylwZ7o4A4ALVFpld/AheYhk7TEaZAJC5hEHVXjEJh3tRHLNLZhtugysb2zgnYbaxOng3U0GXkjY6ztBx/5O/Vy9gTmi3JC5R6bsi5BQwUieu+bXPqGgnUGE6MY9d6TYx5eY7cSR+qW/1xlEdzua+CTd35UIcuI5E7yn3LkLdLLC5gE8XvQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEArn2IYee1tqa2kARb4BvYE6Pu/KvM9tfLLCQAPbrV5/34NLU8cVfaJgW07ytvA7Z5TeivAYsSV2HemWhTs+w68kUBBKBSjBuT7/9xkEfSX/kgwlxQ1gLwdry/Yvar43B/ES30EcGJ8S0lzVENMv90LTHK0sLs8fHzOyzcypc6FhnnqcLump0IP35MFyiQ1vTc6KMAx33sTiwXOiTJklbSnj9KG+yYlxyNjuv5leP93vJHNmoEjlubHRPejhyPIK50mt0fYtrRVD3VFHuV8VWlDDef+rAhRzvu2HtPrtOiWlfV1/Drv4SlS3NQDTUUSoEQcAXjvdFGCTEHp1qiXjjfdQIDAQABAoIBAAa/1lGrK80336HseT1O9mm0Ep91acU2jaZUcinxGysRGNO5GvBrbIXB/MCvlmi3WzPXR0WxAnGc2IZokaxI+/K5FpP+O5Mt0egbomHpVUrfERRTi9DrZi/Bl0mVrwpqJJAeje1N5i8NBwRNGUyasvy4i1bhsVaefEESuCuh89486+3nGveysuw78Y6DmoduElScmFlIUdrNCTuU/Dz9yvg9ni8o5hxPaWHl4jVo/hGhpTVbklYtEXkGygdDJa1VWkJMb4tDBIN+O8KX9QKjcA+7Bj1ItrV96xpkE6HSbYxx0WyG9JqlPhhG1LcDLWUrlkBpoK7K+mFt3IJCjG5wpbUCgYEA1mbOwUfvIE1+1Zhr1RU2QVJNjJhNP6NrSlQ5qX1TcfjmFe4K+G8rDnWjIIBRoG6du0g9OdZUT7MsWm5A4x1ozLRyWsl5TuYfgXmwrdE+HHHaCl8rrhQLUow6VQps+/jOGm4d8GqkWi+yv8BB9PKwW+a2SbUzAqboUzea3N3l1c8CgYEA0FhcAQKHq6nOZ5qX3n4fx9nmrQ1K0OirL5mm4HaQDiMEVR+IbXCZxUC+SL7N5gKWTgaI7BHdhZJ5b4Sf5OujaYacq8l+nb7u1mY1FU6Z7+UWMLDuYp4SJ1MaTI1evE7Ri+o9gkoWC1VsPbWu6mQjKxgeG9wEPeO5T4n/7cvAy3sCgYAnym7G2lXb9eX7OE2S/1vRZbf0xvNXQzoPUnBdL2BEP8BcA5DPqLoh9d0vlAESOFVXw8FxMYD2RbeOlPW/8N5ZV4f9p3S3Guhv/Ci5KaNQXiTsVdtidF/hkxrkW4n8faGqsBMoYnJcNowDIGhdUIlAlSHxrgpojJeDkkdQhHI6awKBgQCResFzqxKVGZMY4Ofe4m7KnCro93kgevbd3Aqcfe2FEYp67fPTh2a4R8cXALTBQVk2znVZcfgexvKonhEQRkHq86X+hko1WBdp+iBi6mmvC2X9Re6PShUfBHY+shBOqTLE4iFlEtplu5ZDWNP0s0ujUcnkZjNIC/VfxtrAbyAGdQKBgQCcyPzuA8sJhKljf82f8zoe2tXdKsDiIRYHnwsvSr04fd65nhSldkvL6LhDt2UZR2tzKTlt5EueYeEdszPJbThIIA8B4di1xCbQEbGm6WZvyP/HS2lUDFbtm4s67rPauzTeHGcpCvMR5MM25q2PN1MNmSUkBEQ8HDIAF65HJAJ4Ig==',
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