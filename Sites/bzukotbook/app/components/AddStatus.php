<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddStatus
 *
 * @author simekadam
 *
 */
namespace Components;

use Nette\Application\AppForm;
use Nette\Forms\Form;

class AddStatus extends \Nette\Application\Control{
    //put your code here
//    public $form;
//    public function __construct($parent, $name) {
//        parent::__construct($parent, $name);
//        $form = new AppForm($this, 'form');
//        $form->addText('status', "Whats on your mind man?")
//                ->addRule(Form::MAX_LENGTH, "Maximum length is %d characters",150)
//                ->addRule(Form::FILLED, "You have to post something,but remember can not send empty post!!");
//        $form->addSubmit('post', "Post your thoughts");
//    }
//
//
//    public function render()
//        {
//                $template = $this->template;
//                $template->form=$this->form;
//                $template->setFile(dirname(__FILE__) . '/statusForm.latte');
//                $template->render();
//        }

//    public function createComponentAddStatusForm($name) {
//
//    }
    public $onOkClick;

    public function render()
        {
                $this->template->form = $this['form'];
                $this->template->setFile(dirname(__FILE__) . '/statusForm.latte');
                $this->template->render();
        }

        protected function createComponentForm($name)
        {
                $form = new AppForm($this, $name);

                $form->addTextArea('status', "Whats on your mind man?")
                        ->addRule(AppForm::MAX_LENGTH, "Maximum length is %d characters",150)
                        ->addRule(AppForm::FILLED, "You have to post something,but remember can not send empty post!!");
                $form->addSubmit('post', "Post your thoughts")
                        ->onClick[] = callback($this, 'onOkClick');
                $form['status']->getControlPrototype()->class('addStatusTextArea');
                return $form;
        }


        public function handleOnOkClick(SubmitButton $button) {
                $this->onOkClick();
    }
}
