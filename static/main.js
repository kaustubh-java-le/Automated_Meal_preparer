let btn = document.getElementById('btn');

btn.addEventListener('click', function calcTotal(e){

    let weight = document.getElementById('weight-input').value;
    let height = document.getElementById('height-input').value;
    height = height/100;
    let finalbmi = (weight/(height*height));
    document.getElementById('your-bmi').value = finalbmi;
    var x;
    if(finalbmi < 18.5) {

        x = 7;
    }

    else if(finalbmi < 25.0) {

        x = 8;
    } 
    else {

        x = 9;
    }
    document.getElementById('ybmitag').value = x;
})

 btn1 = document.getElementById('btn1');

btn1.addEventListener('click', function calcTotall1(e){

    let weight = document.getElementById('weight-input').value;
    let height = document.getElementById('height-input').value;
    let age = document.getElementById('age1').value;
    var ele;
    if (document.getElementById('gen').checked) {
        ele = document.getElementById('gen').value;
      }
    if(ele=="M"){

         ele = (88.362 + ((13.397 * weight) + (4.799 * height*100) - (5.677*age)));
    }
    else{

        ele = (447.593 + ((9.247 * weight) + (3.098 * height*100) - (4.330 * age)))
    }  
    document.getElementById('your-bmr').value = ele;

    var e = document.getElementById("ar");
    var strUser = e.value;
    if(strUser==1.2){

        strUser = ele*1.2

    }
    else if(strUser==1.3){

        strUser = ele*1.375

    }
    else if(strUser==1.5){

        strUser = ele*1.55

    }
    else if(strUser==1.7){

        strUser = ele*1.725

    }
    else{
        strUser = ele*1.9;
    }
    document.getElementById('cal').value = strUser;


})
