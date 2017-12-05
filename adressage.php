<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ip;
        $netmask;
        $gateway;

        $content = "# interfaces(5) file used by ifup(8) and ifdown(8)\nauto lo\niface lo inet loopback";
        $content .= "\n iface enp0s25 inet static";
        $content .= "\t address " . $ip;
        $content .= "\t netmask " . $netmask;
        $content .= "\t gateway " . $gateway;
        
        shell_exec("sudo echo " . $content . " > /etc/network/interfaces");

    } else {
        shell_exec("sudo cp interfaces /network/interfaces");
    }

?>