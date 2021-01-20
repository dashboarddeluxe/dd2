---
extends: _layouts.group
section: content
title: Board Games
date: 2017-03-23
description: This is your first blog post.
cover_image: /img/post-cover-image-2.png
featured: true
weight: 10
links: [
    [
        ["BoardGameGeek","<heading>"]
    ],
    [
        ["BoardGameGeek","http://boardgamegeek.com"],
        ["Subscriptions","http://boardgamegeek.com/subscriptions"],
        ["Search","http://boardgamegeek.com/advsearch/boardgame"],
    ],
    [
        ["Complexity","<subheading>"],
        ["Very Light","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=1.49&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Light","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=1.5&floatrange%5Bavgweight%5D%5Bmax%5D=1.99&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Medium Light","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=2&floatrange%5Bavgweight%5D%5Bmax%5D=2.49&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Medium","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=2.5&floatrange%5Bavgweight%5D%5Bmax%5D=3.49&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Heavy","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=3.5&floatrange%5Bavgweight%5D%5Bmax%5D=5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ],
    [
        ["Duration","<subheading>"],
        ["20 Minutes","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bplaytime%5D%5Bmax%5D=20&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2.5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["40 Minutes","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bleastplaytime%5D%5Bmin%5D=21&range%5Bplaytime%5D%5Bmax%5D=40&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2.5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["1 Hour","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bleastplaytime%5D%5Bmin%5D=30&range%5Bplaytime%5D%5Bmax%5D=60&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2.5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ],
    [
        ["Players","<subheading>"],
        ["1","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=1&range%5Bmaxplayers%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=2&range%5Bmaxplayers%5D%5Bmin%5D=2&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=exclusive&B1=Submit"],
        ["3","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=3&range%5Bmaxplayers%5D%5Bmin%5D=3&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["4","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=4&range%5Bmaxplayers%5D%5Bmin%5D=4&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["5","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=5&range%5Bmaxplayers%5D%5Bmin%5D=5&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["6","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=6&range%5Bmaxplayers%5D%5Bmin%5D=6&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["7","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=7&range%5Bmaxplayers%5D%5Bmin%5D=7&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["8","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=8&range%5Bmaxplayers%5D%5Bmin%5D=8&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["9","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=9&range%5Bmaxplayers%5D%5Bmin%5D=9&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["10","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=10&range%5Bmaxplayers%5D%5Bmin%5D=10&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["11","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=11&range%5Bmaxplayers%5D%5Bmin%5D=11&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["12","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=12&range%5Bmaxplayers%5D%5Bmin%5D=12&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ],
    [
        ["All Games","<subheading>"],
        ["Before 1990","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=-999999999&range%5Byearpublished%5D%5Bmax%5D=1989&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["1990s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=1990&range%5Byearpublished%5D%5Bmax%5D=1999&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2000s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2000&range%5Byearpublished%5D%5Bmax%5D=2009&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2010s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2010&range%5Byearpublished%5D%5Bmax%5D=2019&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2020s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2020&range%5Byearpublished%5D%5Bmax%5D=2029&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ]
    [
        ["Light Games","<subheading>"]
        ["Before 1990","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=-999999999&range%5Byearpublished%5D%5Bmax%5D=1989&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["1990s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=1990&range%5Byearpublished%5D%5Bmax%5D=1999&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2000s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2000&range%5Byearpublished%5D%5Bmax%5D=2009&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2010s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2010&range%5Byearpublished%5D%5Bmax%5D=2019&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2020s","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2020&range%5Byearpublished%5D%5Bmax%5D=2029&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ]
    [
        ["Versatile","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=2&range%5Bmaxplayers%5D%5Bmin%5D=4&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=exclusive&B1=Submit"],
        ["Card Games","http://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&propertyids%5B0%5D=1002&B1=Submit"],
    ],
    [
        ["Reviews","<heading>"],
    ]
    [
        ["Dice Tower","http://dicetower.com"],
        ["Week in Review","http://www.youtube.com/playlist?list=PLOlRvTbmD6tLXrBugjAV1nlFMW5Z4OzJy"],
        ["Latest Review Videos","http://dicetower.com/board-game-videos?field_category_tid=5"],
        ["News","http://dicetowernews.com"],
    ],
    [
        ["iSlaytheDragon Reviews","http://islaythedragon.com/category/game-reviews/"],
    ],
    [
        ["Geeks Under Grace","http://www.geeksundergrace.com/tabletop/"],
    ],
    [
        ["Meeple Like Us","http://meeplelikeus.co.uk/"],
        ["Master List","http://meeplelikeus.co.uk/meeple-like-us-masterlist/"],
    ],
    [
        ["What's Eric Playing","http://whatsericplaying.com/"],
        ["Top 15","http://whatsericplaying.com/top-15/"],
        ["Hot 15","http://whatsericplaying.com/hot-15/"]
    ]
    [
        ["Board vs Game","http://boardvsgame.com"],
    ],
    [
        ["Print and Play","<heading>"],
    ]
    [
        ["PNP Board Games","http://www.boardgamer.ru/forum/index.php?action=unread"],
    ],
    [
        ["Tabletop Simulator Workshop","http://steamcommunity.com/app/286160/workshop/"],
        ["Most Recent","http://steamcommunity.com/workshop/browse/?appid=286160&browsesort=mostrecent&section=readytouseitems"],
    ],
    [
        ["Steam Workshop Download","http://steamworkshop.download"],
    ],
    [
        ["Tray Template","http://templatemaker.nl/index.php?template=matchbox&amp;source=dielines&amp;lang=en"],
    ],
    [
        ["The Esoteric Order of Gamers","http://www.orderofgamers.com/games/"],
    ],
    [
        ["Manila Stores","<heading>"],
    ]
    [
        ["GamingLib","http://www.gaminglib.com/collections/all?sort_by=created-descending"],
    ],
    [
        ["Geekbox PH","http://geekboxph.com/collections/shop-all?sort_by=created-descending"],
        ["Shopee Store","http://shopee.ph/shop/45037362/search?page=0&sortBy=ctime"]
    ],
    [
        ["Board Game Express","http://shopee.ph/shop/120710033/search?page=0&sortBy=ctime"],
    ]
]
---
