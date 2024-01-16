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
        ["BoardGameGeek","https://boardgamegeek.com"],
        ["Subscriptions","https://boardgamegeek.com/subscriptions"],
        ["Search","https://boardgamegeek.com/advsearch/boardgame"],
    ],
    [
        ["Complexity","<subheading>"],
        ["Very Light","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=1.49&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Light","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=1.5&floatrange%5Bavgweight%5D%5Bmax%5D=1.99&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Medium Light","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=2&floatrange%5Bavgweight%5D%5Bmax%5D=2.49&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Medium","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=2.5&floatrange%5Bavgweight%5D%5Bmax%5D=3.49&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["Heavy","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=3.5&floatrange%5Bavgweight%5D%5Bmax%5D=5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ],
    [
        ["Duration","<subheading>"],
        ["20 Minutes","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bplaytime%5D%5Bmax%5D=20&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2.5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["40 Minutes","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bleastplaytime%5D%5Bmin%5D=21&range%5Bplaytime%5D%5Bmax%5D=40&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2.5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["1 Hour","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bleastplaytime%5D%5Bmin%5D=30&range%5Bplaytime%5D%5Bmax%5D=60&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2.5&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ],
    [
        ["Players","<subheading>"],
        ["1","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=1&range%5Bmaxplayers%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=2&range%5Bmaxplayers%5D%5Bmin%5D=2&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=exclusive&B1=Submit"],
        ["3","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=3&range%5Bmaxplayers%5D%5Bmin%5D=3&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["4","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=4&range%5Bmaxplayers%5D%5Bmin%5D=4&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["5","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=5&range%5Bmaxplayers%5D%5Bmin%5D=5&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["6","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=6&range%5Bmaxplayers%5D%5Bmin%5D=6&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["7","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=7&range%5Bmaxplayers%5D%5Bmin%5D=7&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["8","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=8&range%5Bmaxplayers%5D%5Bmin%5D=8&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["9","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=9&range%5Bmaxplayers%5D%5Bmin%5D=9&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["10","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=10&range%5Bmaxplayers%5D%5Bmin%5D=10&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["11","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=11&range%5Bmaxplayers%5D%5Bmin%5D=11&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["12","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=12&range%5Bmaxplayers%5D%5Bmin%5D=12&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ],
    [
        ["All Games","<subheading>"],
        ["Before 1990","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=-999999999&range%5Byearpublished%5D%5Bmax%5D=1989&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["1990s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=1990&range%5Byearpublished%5D%5Bmax%5D=1999&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2000s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2000&range%5Byearpublished%5D%5Bmax%5D=2009&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2010s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2010&range%5Byearpublished%5D%5Bmax%5D=2019&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2020s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2020&range%5Byearpublished%5D%5Bmax%5D=2029&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ]
    [
        ["Light Games","<subheading>"]
        ["Before 1990","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=-999999999&range%5Byearpublished%5D%5Bmax%5D=1989&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["1990s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=1990&range%5Byearpublished%5D%5Bmax%5D=1999&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2000s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2000&range%5Byearpublished%5D%5Bmax%5D=2009&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2010s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2010&range%5Byearpublished%5D%5Bmax%5D=2019&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
        ["2020s","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Byearpublished%5D%5Bmin%5D=2020&range%5Byearpublished%5D%5Bmax%5D=2029&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&B1=Submit"],
    ]
    [
        ["Versatile","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&range%5Bminplayers%5D%5Bmax%5D=2&range%5Bmaxplayers%5D%5Bmin%5D=4&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=exclusive&B1=Submit"],
        ["Card Games","https://boardgamegeek.com/search/boardgame?sort=rank&advsearch=1&floatrange%5Bavgweight%5D%5Bmin%5D=1&floatrange%5Bavgweight%5D%5Bmax%5D=2&nosubtypes%5B0%5D=boardgameexpansion&playerrangetype=normal&propertyids%5B0%5D=1002&B1=Submit"],
    ],
    [
        ["Reviews","<heading>"],
    ]
    [
        ["Dice Tower","https://dicetower.com"],
        ["Top Countdowns","https://www.youtube.com/@thedicetower/search?query=top"]
        ["Week in Review","https://www.youtube.com/playlist?list=PLOlRvTbmD6tLXrBugjAV1nlFMW5Z4OzJy"],
        ["Latest Review Videos","https://dicetower.com/board-game-videos?field_category_tid=5"],
        ["News","https://dicetowernews.com"],
    ],
    [
        ["iSlaytheDragon Reviews","https://islaythedragon.com/category/game-reviews/"],
    ],
    [
        ["Geeks Under Grace","https://www.geeksundergrace.com/tabletop/"],
    ],
    [
        ["Meeple Like Us","https://meeplelikeus.co.uk/"],
        ["Master List","https://meeplelikeus.co.uk/meeple-like-us-masterlist/"],
    ],
    [
        ["What's Eric Playing","https://whatsericplaying.com/"],
        ["Top 15","https://whatsericplaying.com/top-15/"],
        ["Hot 15","https://whatsericplaying.com/hot-15/"]
    ],
    [
        ["Board vs Game","https://boardvsgame.com"],
    ],
    [
        ["Print and Play","<heading>"],
    ],
    [
        ["PNP Board Games","https://www.boardgamer.ru/forum/index.php?action=unread"],
    ],
    [
        ["Tabletop Simulator Workshop","https://steamcommunity.com/app/286160/workshop/"],
        ["Most Recent","https://steamcommunity.com/workshop/browse/?appid=286160&browsesort=mostrecent&section=readytouseitems"],
    ],
    [
        ["steamworkshopdownloader.io","https://steamworkshopdownloader.io/"],
        ["Steam Workshop Download","http://steamworkshop.download"],
    ],
    [
        ["Tray Template","https://templatemaker.nl/index.php?template=matchbox&amp;source=dielines&amp;lang=en"],
    ],
    [
        ["The Esoteric Order of Gamers","https://www.orderofgamers.com/games/"],
    ],
    [
        ["Manila Stores","<heading>"],
    ]
    [
        ["GamingLib","https://www.gaminglib.com/collections/all?sort_by=created-descending"],
    ],
    [
        ["Geekbox PH","https://geekboxph.com/collections/shop-all?sort_by=created-descending"],
        ["Shopee Store","https://shopee.ph/geekboxph?page=0&sortBy=ctime"]
    ],
    [
        ["Board Game Essentials","https://shopee.ph/boardgameessentials?page=0&sortBy=ctime"],
    ]
]
---
