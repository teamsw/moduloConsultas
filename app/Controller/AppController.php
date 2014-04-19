<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	var $components = array(
        'Session',
        'FilterResults.Filter' => array(
        	'auto' => array(
        		'paginate' => false,
        		'explode' => true,
        	),
        	'explode' => arraY(
        		'charater' => ' ',
        		'concatenate' => 'AND',
        	)

        ),
        'Auth' => array(
            'loginRedirect' => array('controller' => 'agendas', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authorize' => array('Controller')
        )
    );

    public function isAuthorized($user) {
	    if (isset($user['role']) && $user['role'] === 'admin') {
	        return true; // Admin pode acessar todas actions
	    }
	    return false; // Os outros usuários não podem
	}

    var $helpers = array(
    	'FilterResults.search' => array(
    		'operators' => array (
    			'LIKE' => 'containining',
    			'NOT LIKE' => 'not containining',
    			'LIKE BEGIN' => 'starting with',
    			'LIKE END' => 'ending with',
    			'=' => 'equal to',
    			'!=' => 'different',
    			'>' => 'greater than',
    			'>=' => 'greater or equal to',
    			'<' => 'less than',
    			'<=' => 'less or equal to'

    		)
    	),
    	'Session'
    );

    public function beforeFilter(){
        $this->Auth->allow('login');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }


}
