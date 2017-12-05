<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
    <title>Document</title>
</head>

<body>
    <section id="sidebar">
        <div class="menu">
            <ul>
                <li onclick="openTab(event, 'reseaux')">
                    <i class="material-icons">settings_ethernet</i>Réseaux</li>
                <li onclick="openTab(event, 'firewall')">
                    <i class="material-icons">whatshot</i>Firewall</li>
                <li onclick="openTab(event, 'debit')">
                    <i class="material-icons">network_check</i>Débit</li>
                <li onclick="openTab(event, 'email')">
                    <i class="material-icons">email</i>Email</li>
            </ul>
        </div>
    </section>
    <section id="main">
        <div id="reseaux" class="tab">
            <div class="card">
                <h3>Adressage</h3>
                <hr class="card-divider" />
                <div class="card-body">
                    <div class="card-body-row">
                        <label for="ip">IP</label>
                        <?php
                            $ret = shell_exec("grep address /etc/network/interfaces");
                            $res = preg_grep('/\d*\.\d*\.\d*\.\d*/', explode(' ', $ret));
                            echo '<input class="card-input" name="ip" value="' . $res[1] . '" onkeyup="validateIp(this)"/>';
                        ?>
                    </div>
                    <div class="card-body-row">
                        <label for="mask">Masque</label>
                        <?php
                            $ret = shell_exec("grep netmask /etc/network/interfaces");
                            $res = preg_grep('/\d*\.\d*\.\d*\.\d*/', explode(' ', $ret));
                            echo '<input class="card-input" name="mask" value="' . $res[1] . '" onkeyup="validateIp(this)"/>';
                        ?>
                    </div>
                    <div class="card-body-row">
                        <label for="gateway">Passerelle</label>
                        <?php
                            $ret = shell_exec("grep gateway /etc/network/interfaces");
                            $res = preg_grep('/\d*\.\d*\.\d*\.\d*/', explode(' ', $ret));
                            echo '<input class="card-input" name="gateway" value="' . $res[1] . '" onkeyup="validateIp(this)"/>';
                        ?>
                    </div>
                    <input type="submit" class="card-submit" id="submit-adressage" value="Appliquer" />
                    <input type="submit" class="card-submit" value="Réinitialiser" />
                </div>
            </div>

            <div class="card">
                <h3>DHCP</h3>
                <hr class="card-divider" />
                <div class="card-body">
                    <div class="card-body-row">
                        <label for="ip-first">Première adresse</label>
                        <input class="card-input" name="ip-first" />
                    </div>
                    <div class="card-body-row">
                        <label for="ip-last">Dernière adresse</label>
                        <input class="card-input" name="ip-last" />
                    </div>
                    <div class="card-body-row">
                        <label for="lease">Bail (en s.)</label>
                        <input class="card-input" name="lease" />
                    </div>
                    <input type="submit" class="card-submit" value="Appliquer" />
                </div>
            </div>

        </div>
        <div id="firewall" class="tab">
            Firewall
        </div>
        <div id="debit" class="tab">
            Débit
        </div>
        <div id="email" class="tab">
            Email
        </div>
    </section>
</body>

</html>