const capitalAmount= 2074.56;
const dailyInterest=0.67;
document.getElementById('capital').value=`Php ${formatNumber(capitalAmount)}`;

function formatNumber(number) {return number.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ",");}

function dateToday() {
    const now = moment();
    const formattedDate = now.format('dddd, MMMM DD, YYYY');
    const localeTime = now.format('h:mm:ss A');
    const dateTimeToday = `${formattedDate} ${localeTime}`;
    document.getElementById('timeNow').innerText = dateTimeToday;
}

function formatDate(date) {
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };
    return date.toLocaleDateString(undefined, options);
}

function dateStart() {
    const specificDate = new Date('2022-05-07T00:32:26');
    const formattedDate = formatDate(specificDate);
    document.getElementById('dateBorrowed').value = formattedDate;
    return specificDate;
}

function computeTotalDifference() {
    const specificDate = dateStart();
    const currentDate = new Date();
    const timeDifferenceInMilliseconds = currentDate - specificDate;
    const timeDifferenceInDays = timeDifferenceInMilliseconds / (1000 * 60 * 60 * 24);
    document.getElementById('totalDays').value = `${timeDifferenceInDays.toFixed(5)} days`;
    return timeDifferenceInDays;
}
const amountDue = document.getElementById('amountDue');

function totalDue(){
    const subTotal = computeTotalDifference() * (capitalAmount * (dailyInterest/100));
    const due = capitalAmount + subTotal;
    const fDue = formatNumber(due);
    
    document.getElementById('totalDue').value = `Php ${fDue}`;
    amountDue.innerHTML = `Php ${fDue}`;

    return due;
}

totalDue();
dateToday();
dateStart();
computeTotalDifference();

setInterval(dateToday, 1000);
setInterval(computeTotalDifference, 10);
setInterval(totalDue, 10);

const pay = document.getElementById("pay");
const showModal = document.getElementById("msgBgd");
const btnX = document.getElementById("btnX");

pay.addEventListener('click',function(){
    showModal.style.display = "block";
});

btnX.addEventListener('click', function(){
    showModal.style.display = "none";
});
