<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPortfolio | Loan - Edison</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php echo "<div id='timeNow'></div>";?>
    <?php $dailyInterest = 0.67 ?>
    <script>const dailyInterest = <?php echo $dailyInterest; ?>;</script>
    <div id="parentContainer"  >
    <header>Edison Jurac Villarba</header>
    <div id="pCconent">
        <div id="img"><img src="https://scontent.fceb5-1.fna.fbcdn.net/v/t39.30808-6/383082038_219185587821252_3125034222106586439_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a2f6c7&_nc_eui2=AeHWZzkhTHfhzdFIlBgMiqoX42mkvvMmeMfjaaS-8yZ4x2YyrM-XefpHvi8490r4j_AB07g4HwwkwOS3C2jPyqd-&_nc_ohc=WYgyKFV2VPEAX81oIhx&_nc_ht=scontent.fceb5-1.fna&oh=00_AfClCn0F0g0I_A0z2XsA_-xGnwmg_dyZJoQHQ5fFUAJf8w&oe=652B73DA" alt="Edison Villarba's facebook profile picture">
        </div>
        <table >
            <tr>
                <td>Capital Borrowed</td>
                <td>:</td>
                <td ><input type="text" id="capital" value="<?php echo 'Php '.$capitalAmount; ?>" disabled></td>
            </tr>
            <tr>
                <td>Date Borrowed</td>
                <td>:</td>
                <td><input type="text" id="dateBorrowed" disabled></td>
            </tr>
            <tr>
                <td>Total days since borrowed</td>
                <td>:</td>
                <td><input type="text" id="totalDays" disabled></td>
            </tr>
            <tr>
                <td>Interest per day</td>
                <td>:</td>
                <td><input type="text" id="interestPerDay" value="<?php echo $dailyInterest.'%' ?>" disabled></td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Total due</td>
                <td>:</td>
                <td><input type="text" id="totalDue" disabled></td>
            </tr>
        </table>
    </div>

    <div style="text-align:center;">
        <input type="button" id="pay" value="Pay via Gcash">
    </div>
    <div id='msgBgd'>
        <div id='msgContainer'>
            <div class="Btn" id="btnX">&times;</div>
            <div style="text-align:center; padding: 15px 0;"><img src="https://upload.wikimedia.org/wikipedia/commons/5/52/GCash_logo.svg" alt=""> </div>
            <div id="payTable" style="border-top: 1px solid #474747; margin:25px;">
                <table >
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>JOVIE JURAC</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td>09388062262</td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td>:</td>
                        <td id="amountDue"></td>
                    </tr>
                </table>
            </div>
            <div style="text-align:right; margin:20px;"><a href="gcash://">Go to GCash app</a></div>
        </div>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="script.js"></script>
</html>