![](https://s.yimg.com/ny/api/res/1.2/gv6myUcphq.O3RyWKgft2A--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9ODAw/http://media.zenfs.com/en-US/homerun/ccn_656/15d4c87211f8e1969e4a79f2f13c372c)
# btc-simple-wallet
A very simple bitcoin wallet!

<p>The script uses [coinpayments API](http://https://www.coinpayments.net/apidoc "coinpayments API")</p>
![](https://pbs.twimg.com/profile_images/988561676910837761/3dVlPP4k_200x200.jpg)
=======
<p>This script uses the CoinPayments API</p>

<h3>Installation</h3>
<hr>
<p>To install this script follow the steps below</p>
<p><i>Upload all the files onto your server or host </i></p>
<p><i>Edit config.php and enter the required information about the database</i></p>
<p><i>In the file dowithdraw.php enter the private and public key (from coinpayments) at line 38</i></p>
<p><i>In the file new.php enter your private and public key (from coinpayments) at line 6 </i></p>
<p><i>Add a cron job and run the balance.php file in the crons folder every 1 minute. This file is important because it saves important data in the database and improves the security of the script.</i></p>
<p><i>Import sbtcw.sql into your database</i></p>
<b>NOW YOU ARE DONE!</b>
<p>Enjoy the script!</b>
<hr>
<h2>NOTES</h2>
<p><li> Remember that there is a deposit fee. The deposit fee is 0.5%.</p>
<p><li> The current withdrawal fee is 0.0005 BTC. You need to set it to what the coinpayments fee is.</p>
<p><li> These scripts takes 1 minute between each deposit and withdrawal of each user to ensure that  everything is fine for that specific user. This increases the security of the script.</p>
