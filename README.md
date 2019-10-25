![a leather wallet with bitcoin in it](https://s.yimg.com/ny/api/res/1.2/gv6myUcphq.O3RyWKgft2A--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9ODAw/http://media.zenfs.com/en-US/homerun/ccn_656/15d4c87211f8e1969e4a79f2f13c372c)
# btc-simple-wallet
A very simple bitcoin wallet!

Powered by: [coinpayments API documentation](http://https://www.coinpayments.net/apidoc "coinpayments API")
![coinpayments.net logo](https://pbs.twimg.com/profile_images/988561676910837761/3dVlPP4k_200x200.jpg)

## Installation
To install this script follow the steps below:
 1. _Upload the files on your server or host_
 2. _Edit **config.php** and enter the info of the database_
 3. _In file **dowithdraw.php** enter your private and public key (from coinpayments) at line 38_
 4. _In file **new.php** enter your private and public key (from coinpayments) at line 6_
 5. _You need to add a **cron** and run file **balance.php** in folder **crons** every 1 minute. This file helps to save some important data on your database and increases the security of the script. This file is **important**._
 6. _Import **sbtcw.sql** into your database_

 *Now you're done! Enjoy the script!*
## Notes
 - Remember that there is a deposit fee. The **deposit fee is 0.5%**.
 - Current **withdrawal fee is 0.0005 BTC**. You need to set it to what coinpayments fee is.
 - The **scripts takes 1 minute between deposit and withdrawal** of each user to make sure everything is fine for that specific user. This increases the security of the script.

![bitcoin](https://miro.medium.com/max/1156/1*qhsL7p_ffEc9O6gITiJ4_A.png)
