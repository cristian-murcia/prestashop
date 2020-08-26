<?php

class ControllerPrincipal {
    /*
     * Metodo que permite el envio de los datos de formulario de registro al servicio web de java
     */

    public static function onSubmit($data) {

        $conexion = curl_init();

        curl_setopt_array($conexion, array(
            CURLOPT_URL => "http://190.60.198.233:8080/api/jsonws/ImpresistemWeb-portlet.customer/create-user",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic cGFnaW5hX2FiaWVydGFAaW1wcmVzaXN0ZW0uY29tOkltcHJlc2lzdGVtMjAyMCo=",
                "Cookie: GUEST_LANGUAGE_ID=es_ES; JSESSIONID=F89D9CFA037A92FB89520A285F7A7AEA"
            ),
        ));
        $response = curl_exec($conexion);
        curl_close($conexion);

        return $resul = json_decode($response);
    }

    /*
     * Metodo de Login de usuario para consumo de servicio web en java
     */

    public static function LoginSubmit($data) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://190.60.198.233:8080/api/jsonws/ImpresistemWeb-portlet.impresistemuser/validate-user-credentials%20%20",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic cGFnaW5hX2FiaWVydGFAaW1wcmVzaXN0ZW0uY29tOkltcHJlc2lzdGVtMjAyMCo=",
                "Cookie: GUEST_LANGUAGE_ID=es_ES; JSESSIONID=BD1B5286808F9AD29E8CB676F821A540"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        return $resul = json_decode($response);
    }

}
