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
    {{ $slot }}
    </div>
</x-layout>