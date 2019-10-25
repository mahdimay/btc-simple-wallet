![](https://s.yimg.com/ny/api/res/1.2/gv6myUcphq.O3RyWKgft2A--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9ODAw/http://media.zenfs.com/en-US/homerun/ccn_656/15d4c87211f8e1969e4a79f2f13c372c)
# btc-simple-wallet
A very simple bitcoin wallet!
<p>The script uses [coinpayments API](http://https://www.coinpayments.net/apidoc "coinpayments API")</p>
![](https://pbs.twimg.com/profile_images/988561676910837761/3dVlPP4k_200x200.jpg)
<h3>Installation</h3>
<hr>
<p>To install this script follow the steps bellow</p>
<p><i>Upload the files on your server or host </i></p>
<p><i>Edit config.php and enter the info of the database</i></p>
<p><i>In file dowithdraw.php enter your private and public key (from coinpayments) at line 38</i></p>
<p><i>In file new.php enter your private and public key (from coinpayments) at line 6 </i></p>
<p><i>You need to add a cron and run file balance.php in folder crons every 1 minute. This file helps to save some important data on your database and increases the security of the script. This file is important.</i></p>
<p><i>Import sbtcw.sql into your database</i></p>
<b>NOW YOU ARE DONE!</b>
<p>Enjoy the script!</b>
<h2>NOTES</h2>
<p>- Remember that there is a deposit fee. The deposit fee is 0.5%.</p>
<p>- Current withdrawal fee is 0.0005 BTC. You need to set it to what coinpayments fee is.</p>
<p>- The scripts takes 1 minute between deposit and withdrawal of each user to make sure everything is fine for that specific user. This increases the security of the script.</p>
