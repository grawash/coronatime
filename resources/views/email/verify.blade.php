<x-layout>
    <style>
        body{
            margin: 0;
            padding: 0;
            display: table;
            height: 100vh;
        }
        .container
        {
            height: fit-content;
            box-sizing: border-box;
            display: table-cell;
            vertical-align: middle;
        }
        .container > * {
            display: block;
            width: fit-content;
            margin: auto;
        }
        #img{
            width: 50%;
            height: auto;
        }
        #heading{
            margin-top: 5%;
            font-weight: 900;
            font-size: 25px;
        }
        #text{
            margin-top: 1.5%;
            font-weight: 400;
            font-size: 18px;
        }
        #verifyBtn{
            margin-top: 3.5%;
            background-color: #0FBA68;
            padding:1rem 0;
            border-radius: 8px;
            width: 41%;
            font-weight: 900;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: white;
        }
        @media only screen and (max-width:600px) {
            /* For mobile phones: */
            .container {
                padding:2%;
            }
            #img{
                width: 90%;
            }
            #heading{
                font-size: 20px;
            }
            #text{
                font-size: 16px;
            }
            #verifyBtn{
            width: 90%;
            }
        }
    </style>
    <div class="container">
    <img id="img" src="https://lh3.googleusercontent.com/rkcFmv76Sc93_TT7rXBfTkhwMH9oXs67AiGF9gfIKJGvoN1BDyGh6K0UwY0vyCLlU7b5kKHTg4LcPi7yAahQWvKXgOW7fSuqWr66oCkMiA_HCdgP7DOb1PKQmDVTBp55LSw7uq9IUZYdnf5uCiRbbTVhEidbO7LJktQafSQUIAUiQ_mqXEkRW_9En8lNyQd7OFfW7JdY2qqMat5SJ8x1A0eScoR2zg9WwurJ_NmvIvbeEfTYJh1tw7H_643-HWbzzgaRjRtZQw7Yt52kSR_hW7tPSuldFgcHC3XFJvlPksql4kZvGS1sr0QDlvHy2u2_Bcd7t9izoZtZ-mE-DC5SeIC-IbDIHqK4Rut597lgUvJ-JUyQfbJAqVZTaBuFqp3hyE16TzEf4TA_2HwuW_REy_jNwqDLi2gpbLCqnu6wCgtcWDIEUNu9LUm31QhzhGfxMOz7YjmzXPqn_xHRKAacJYhYbVtOAT1NU1CdMBooefYVewIK1xiidyADKeSNSTqEuYt-o1ESMY5YI5kH2hxMM0ltIqv52UjHlLfHr1ILhseIphVjhzEEbt1LvG5_2AVAA3KkDwpHI5PmKRpK32ZLROewwT8NuQ-n5OLqdjaKqJYiYkLqf7eNws0cpgrGTx_e8797Vln1pDwulT8jijTFvVNF61MAAfDkHXPb8YEGnSxWohiPlHwwbw1HVVEQkSsHihptbmzxTmYTjuBu6rBS5Dgb40wRss_plhOs0tdShXVziDWXnC4lKJWN-_DJ=w1040-h730-no?authuser=0" alt="Coronatime">
    <h1 id="heading">Confirmation email</h1>
    <p id="text">click this button to verify your email</p>
    <a id="verifyBtn" href="{{ $url }}">VERIFY EMAIL</a>
    </div>
</x-layout>


