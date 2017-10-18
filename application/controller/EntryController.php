<?php

    class EntryController extends Controller{
        
        public function __construct(){

            parent::__construct();

            Auth::checkAuthentication();
        }

        public function index(){

            $this->View->render('entry/index');
        }
        public function attachements(){

            $this->View->render('entry/attachements');
        }

        public function settings(){

            $this->View->render('entry/settings');
        }

        public function actionAccountSettings(){
            
            AdminModel::setAccountSuspensionAndDeletionStatus(
                Request::post('suspension'), Request::post('softDelete'), Request::post('user_id')
            );

            Redirect::to("admin");
        }
    }
