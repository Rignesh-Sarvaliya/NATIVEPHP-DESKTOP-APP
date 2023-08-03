<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NativePHP App</title>

    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            // overflow-x: hidden;
            padding: 0;
        }

        header {
            align-items: center;
            display: flex;
            height: 50px;
            justify-content: space-between;
            margin: 15px 30px;
            position: absolute;
            top: 15px;
            width: calc(100% - 60px);

            #logo {
                border-radius: 5px;
                height: 100%;
                width: 100px;
            }
        }

        main {
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2920&q=80');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
            display: flex;
            flex-direction: column;
            height: 100svh;
            justify-content: center;
            width: 100%;

            h1 {
                text-shadow: 2px 2px #000;
            }

            #hero-actions {
                @media screen and (orientation: landscape) {
                    bottom: 15px;
                    left: 30px;
                    position: absolute;
                }
            }

            #progress {
                bottom: 15px;
                position: absolute;

                @media screen and (orientation: portrait) {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    width: calc(100% - 60px);
                }

                @media screen and (orientation: landscape) {
                    aspect-ratio: 1/1;
                    display: block;
                    height: calc(100% - 60px - 50px);
                    right: 30px;
                }

                .progress {
                    height: 20px;
                    width: 100%;

                    @media screen and (orientation: landscape) {
                        transform: rotate(-90deg) translateY(-100%);
                        transform-origin: top right;
                    }
                }

                #progress--content {
                    padding: 15px;
                    text-align: center;

                    @media screen and (orientation: landscape) {
                        bottom: 0;
                        padding: 0 15px;
                        right: 20px;
                        position: absolute;
                        text-align: right;
                    }
                }
            }
        }

        .modal {
            .modal-content {
                padding: 15px;
            }
        }

        footer {
            padding: 15px 30px
        }
    </style>
</head>

<body class="antialiased">
    <main>

        <div id="progress">
            <div id="progress--content">
                <h3>Loading</h3>
                <span>Welcome to the desktop App</span>
            </div>
        </div>
    </main>
</body>

</html>
