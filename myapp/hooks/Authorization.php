<?php
class Authorization {
    public function check($params) {
        require_once('acl.php');
        // Acceso al controlador
        $ci = &get_instance();
        $class = $ci->router->fetch_class();
        $method = $ci->router->fetch_method();
        // Extraemos las variables de sesión de las cookies
        if (isset($_COOKIE) && isset($_COOKIE['ci_session']))  $ci_session=$ci->session->userdata;

        if (!empty($ci_session['logged_in'])){
            $session=$ci_session['logged_in'];
        }
        // La página está disponible para todos
        if (!empty($allowAll[$class][$method])){
            return True;
        }
        // La sesión no está iniciada o el grupo no está establecido
        if (!isset($session) || !isset($session['group'])){
            redirect(base_url('user/login'));
        }
        // La sesión está iniciada, pero el usuario no tiene acceso
        if (empty($allowOnly[$session['group']][$class][$method]) || $allowOnly[$session['group']][$class][$method] != True){
            redirect(base_url('pages/view/unauthorized'));
        }
        // Si llegamos hasta aquí, es porque tiene permiso
        return True;
    }
}
?>
