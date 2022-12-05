<?php
    class OrderController
    {
        public function check(){
            
            require_once('checkorder_1.php');
        }
        public function bill(){
            $cus_list = Customer::getCustomer();
            $emp_list = Employee::getEmployee();
            $pay_list = PaymentOption::getPaymentName();
            require_once('views/section1/create_quotation.php');
        }

        public function add(){
            $cus_name = $_GET['cus_name'];
            $payment_name = $_GET['payment_name'];
            $amount = $_GET['amount'];
            $emp_name = $_GET['emp_name'];
            $q_date = $_GET['q_date'];

            Section1::add($cus_name,$payment_name, $amount, $emp_name, $q_date);
            Section1Controller::index() ;
        }

        public function deleteConfirm(){
            $q_no = $_GET['q_no'];
            $section1 = Section1::get($q_no);
            require_once('views/section1/delete_quotation.php');
        }

        public function delete(){
            $q_no = $_GET['q_no'];
            Section1::delete($q_no);
            Section1Controller::index();
        }

        public function updateForm(){
            $q_no = $_GET['q_no'];
            $cus_list = Customer::getCustomer();
            $emp_list = Employee::getEmployee();
            $pay_list = PaymentOption::getPaymentName();
            $section1_list = Section1::get($q_no);
            require_once('views/section1/update_quotation.php');
            
        }

        public function update(){
            $q_no = $_GET['q_no'];
            $cus_name = $_GET['cus_name'];
            $payment_name = $_GET['payment_name'];
            $amount = $_GET['amount'];
            $emp_name = $_GET['emp_name'];
            $q_date = $_GET['q_date'];

            Section1::update($q_no, $cus_name, $payment_name, $amount, $emp_name, $q_date);
            Section1Controller::index();

        }

        public function search(){
            $key = $_GET['key'];
            $section1_list = Section1::search($key);
            require_once('views/section1/index_quotation.php');
        }
    }
?>