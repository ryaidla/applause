<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style/all.css">
</head>
<body>
<?php require "blocks/header.php"?>

    <div class="result">
        <form class="result-enter" id = "prediction">
            <label for="">University</label>
            <select name="" id="" >
                <option disabled hidden selected>Select University</option>
                <option value="Astana IT">Astana IT</option>
            </select>
            <label for="">Specialities</label>
            <select name="" id="Speciality" onchange="selectValue()">
                <option disabled hidden selected>Select Speciality</option>
                <option value="1">Information systems</option>
                <option value="2">Telecommunication systems</option>
                <option value="3">Cyber Security</option>
                <option value="4">IT Management</option>
                <option value="5">Digital Journalism</option>
                <option value="6">Industrial Internet of Things</option>
            </select>
            <label for="" >Your UNT</label>
            <input type="number" placeholder="140" id="untScore">

            <button type="button" id="btn" onclick="mainJsFunc()">Count</button>
        </form>

        <div class="result-info">
            <p>This probability calculator is for calculating the percentage of admission to a university. This probability calculator for calculating the percentage of admission to a university, also it was was made based on the latest data of 3 years. At the moment, our service does not calculate the assumption for admission to the quota grant. And also, this service currently works only for universities in Kazakhstan. In the future we are planning to expand the list of universities with more accurate percentage data.</p>
            <h3>Your prediction percentage is:</h3>
            <h3 id = "result"></h3>
        </div>  
    </div>

    <div class="background-pics">
        <img src="img/Vector 1.png" alt="">
        <img src="img/Vector 2.png" alt="">
    </div>


<!--    <script>-->
<!--            function mainJsFunc() {-->
<!--                let userScore = document.getElementById("untScore").value;-->
<!--                if (userScore < 0 || userScore > 140) {-->
<!--                    alert("Please enter score between 1 and 140");-->
<!--                } else {-->
<!--                    let min = 92;-->
<!--                    let realMin2019 = 88;-->
<!--                    let realMin2020 = 93;-->
<!--                    let realMin2021 = 105;-->
<!--                    let res;-->
<!--                    let meanRealMin = (realMin2019 + realMin2020 + (realMin2021 * 2)) / 4;-->
<!--                    if (meanRealMin < userScore) {-->
<!--                        res = 78.5;-->
<!--                        for (let i = 0; i < (userScore - meanRealMin); i++) {-->
<!--                            res += 0.5;-->
<!--                        }-->
<!--                    }-->
<!--                    if (meanRealMin > userScore) {-->
<!--                        res = 78.5;-->
<!--                        for (let i = 0; i < (meanRealMin - userScore); i++) {-->
<!--                            res -= 2;-->
<!--                        }-->
<!--                    }-->
<!--                    if (meanRealMin == userScore) {-->
<!--                        res = 75;-->
<!--                    }-->
<!--                    if (min == userScore) {-->
<!--                        res = 50;-->
<!--                    }-->
<!--                    if (min > userScore) {-->
<!--                        res = 0;-->
<!--                    }-->
<!--                    let result = "" + res + " %";-->
<!--                    document.getElementById("result").innerHTML = result;-->
<!--                }-->
<!--            }-->

<!--    </script>-->
    <script> function selectValue(){
        let selectedValue = document.getElementById("Speciality").value;
        // alert(selected);
        return selectedValue;
    }
    function mainJsFunc() {
        let userScore = document.getElementById("untScore").value;
        if (userScore < 0 || userScore > 140) {
            alert("Please enter score between 1 and 140");
        } else {
            if (selectValue() == 1) {
                let min = 92;
                let realMin2019 = 88;
                let realMin2020 = 93;
                let realMin2021 = 105;
                let res;
                let meanRealMin = (realMin2019 + realMin2020 + (realMin2021 * 2)) / 4;
                if (meanRealMin < userScore) {
                    res = 78.5;
                    for (let i = 0; i < (userScore - meanRealMin); i++) {
                        res += 0.5;
                    }
                }
                if (meanRealMin > userScore) {
                    res = 78.5;
                    for (let i = 0; i < (meanRealMin - userScore); i++) {
                        res -= 2;
                    }
                }
                if (meanRealMin == userScore) {
                    res = 75;
                }
                if (min == userScore) {
                    res = 50;
                }
                if (min > userScore) {
                    res = 0;
                }
                let result = "" + res + " %";
                document.getElementById("result").innerHTML = result;
            }
            if (selectValue() == 2) {
                let min = 95;
                let realMin2019 = 96;
                let realMin2020 = 98;
                let realMin2021 = 108;
                let res;
                let meanRealMin = (realMin2019 + realMin2020 + (realMin2021 * 2)) / 4;
                if (meanRealMin < userScore) {
                    res = 78.5;
                    for (let i = 0; i < (userScore - meanRealMin); i++) {
                        res += 0.5;
                    }
                }
                if (meanRealMin > userScore) {
                    res = 78.5;
                    for (let i = 0; i < (meanRealMin - userScore); i++) {
                        res -= 2;
                    }
                }
                if (meanRealMin == userScore) {
                    res = 75;
                }
                if (min == userScore) {
                    res = 50;
                }
                if (min > userScore) {
                    res = 0;
                }
                let result = "" + res + " %";
                document.getElementById("result").innerHTML = result;
            }
            if (selectValue() == 3) {
                let min = 100;
                let realMin2019 = 90;
                let realMin2020 = 104;
                let realMin2021 = 111;
                let res;
                let meanRealMin = (realMin2019 + realMin2020 + (realMin2021 * 2)) / 4;
                if (meanRealMin < userScore) {
                    res = 78.5;
                    for (let i = 0; i < (userScore - meanRealMin); i++) {
                        res += 0.5;
                    }
                }
                if (meanRealMin > userScore) {
                    res = 78.5;
                    for (let i = 0; i < (meanRealMin - userScore); i++) {
                        res -= 2;
                    }
                }
                if (meanRealMin == userScore) {
                    res = 75;
                }
                if (min == userScore) {
                    res = 50;
                }
                if (min > userScore) {
                    res = 0;
                }
                let result = "" + res + " %";
                document.getElementById("result").innerHTML = result;
            }
            if (selectValue() == 4) {
                let min = 89;
                let realMin2019 = 85;
                let realMin2020 = 92;
                let realMin2021 = 100;
                let res;
                let meanRealMin = (realMin2019 + realMin2020 + (realMin2021 * 2)) / 4;
                if (meanRealMin < userScore) {
                    res = 78.5;
                    for (let i = 0; i < (userScore - meanRealMin); i++) {
                        res += 0.5;
                    }
                }
                if (meanRealMin > userScore) {
                    res = 78.5;
                    for (let i = 0; i < (meanRealMin - userScore); i++) {
                        res -= 2;
                    }
                }
                if (meanRealMin == userScore) {
                    res = 75;
                }
                if (min == userScore) {
                    res = 50;
                }
                if (min > userScore) {
                    res = 0;
                }
                let result = "" + res + " %";
                document.getElementById("result").innerHTML = result;
            }
            if (selectValue() == 5) {
                let min = 85;
                let realMin2019 = 82;
                let realMin2020 = 82;
                let realMin2021 = 88;
                let res;
                let meanRealMin = (realMin2019 + realMin2020 + (realMin2021 * 2)) / 4;
                if (meanRealMin < userScore) {
                    res = 78.5;
                    for (let i = 0; i < (userScore - meanRealMin); i++) {
                        res += 0.5;
                    }
                }
                if (meanRealMin > userScore) {
                    res = 78.5;
                    for (let i = 0; i < (meanRealMin - userScore); i++) {
                        res -= 2;
                    }
                }
                if (meanRealMin == userScore) {
                    res = 75;
                }
                if (min == userScore) {
                    res = 50;
                }
                if (min > userScore) {
                    res = 0;
                }
                let result = "" + res + " %";
                document.getElementById("result").innerHTML = result;
            }
            if (selectValue() == 6) {
                let min = 89;
                let realMin2019 = 93;
                let realMin2020 = 98;
                let realMin2021 = 106;
                let res;
                let meanRealMin = (realMin2019 + realMin2020 + (realMin2021 * 2)) / 4;
                if (meanRealMin < userScore) {
                    res = 78.5;
                    for (let i = 0; i < (userScore - meanRealMin); i++) {
                        res += 0.5;
                    }
                }
                if (meanRealMin > userScore) {
                    res = 78.5;
                    for (let i = 0; i < (meanRealMin - userScore); i++) {
                        res -= 2;
                    }
                }
                if (meanRealMin == userScore) {
                    res = 75;
                }
                if (min == userScore) {
                    res = 50;
                }
                if (min > userScore) {
                    res = 0;
                }
                let result = "" + res + " %";
                document.getElementById("result").innerHTML = result;
            }
        }
    }

    </script>
</body>
</html>