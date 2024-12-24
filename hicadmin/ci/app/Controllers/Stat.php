<?php

namespace App\Controllers;

class Stat extends BaseController
{
	public function index()
	{
		$session = session();
		$logged_in = $session->get('admin_logged_in');
		if ($logged_in) {
			return redirect()->to(base_url('stat/dashboard'));
		} else {
			echo view('stat/login');
		}
	}

	public function auth()
	{
		$session = session();
		$uname = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		$year = $this->request->getPost('year');

		if ($uname == 'sbosun' && $password == 'hic2023') {
			$newdata = array(
				'admin' => $uname,
				'year' => $year,
				'admin_logged_in' => TRUE
			);
			$session->set($newdata);
			return redirect()->to(base_url('stat/dashboard'));
		} else {
			return redirect()->to(base_url('stat/'));
		}
	}

	public function logout()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			session()->destroy();
			return redirect()->to(base_url('stat/'));
		} else {
			echo view('stat/login');
		}
	}

	public function dashboard()
	{
		// echo('dashboard');	
		$logged_in = session()->get('admin_logged_in');

		$ManualDel = new \App\Models\ManualDel();
		if ($logged_in) {
			$year = session()->get('year');
			if($year == 'current'){
				$Delegates = new \App\Models\Delegates();
			}else{
				$Delegates = new \App\Models\DelegatesOld();
			}

			$data = [
				'total_del' => $Delegates->whereNotIn('ref',['m'])->countAllResults(),
				'ife' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Ife|Olode')->countAllResults(),
				'ilesha' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Ilesha')->countAllResults(),
				'osogbo' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Osogbo|Ede')->countAllResults(),
				'ede' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Ede')->countAllResults(),
				'ikirun' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Ikirun|Ila|Inisa|Okuku')->countAllResults(),
				'iwo' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Iwo|Ejigbo')->countAllResults(),
				'akure' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Akure|Owena')->countAllResults(),
				'ekiti' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'Ekiti')->countAllResults(),
				'others' => $Delegates->whereNotIn('ref',['m'])->where('lb', 'others')->countAllResults(),
				'male' => $Delegates->whereNotIn('ref',['m'])->where('gender', 'male')->countAllResults(),
				'female' => $Delegates->whereNotIn('ref',['m'])->where('gender', 'female')->countAllResults(),
				'ssec' => $Delegates->whereNotIn('ref',['m'])->where('category', 'Secondary School')->countAllResults(),
				'hi' => $Delegates->whereNotIn('ref',['m'])->where('category', 'Undergraduate')->countAllResults(),
				'workers' => $Delegates->whereNotIn('ref',['m'])->where('category', 'Workers/Others')->countAllResults(),
				'sch_leaver' => $Delegates->whereNotIn('ref',['m'])->where('category', 'School Leaver')->countAllResults()
			];

			echo view('stat/header');
			echo view('stat/dashboard', $data);
			echo view('stat/footer');
		} else {
			echo view('stat/login');
		}
	}

	public function manual()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {

			echo view('stat/header');
			echo view('stat/manualUpload');
			echo view('stat/footer');
		} else {
			echo view('stat/login');
		}
	}

	public function manual1()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {

			echo view('stat/header');
			echo view('stat/manualUpload1', $this->request->getGet());
			echo view('stat/footer');
		} else {
			echo view('stat/login');
		}
	}

	public function manual2()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {

			$manual = new \App\Models\ManualDel();
			$incoming = $this->request->getPost();
			$res = $manual->insert($incoming);

			return redirect()->back();
		} else {
			echo view('stat/login');
		}
	}


	public function printe()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			$year = session()->get('year');
			if($year == 'current'){
				$Delegates = new \App\Models\Delegates();
				// $record = $Delegates->findAll();
				$record = $Delegates->join('pins_24', 'pin = ref')->findAll();
			}else{
				$Delegates = new \App\Models\DelegatesOld();
				$record = $Delegates->join('pins_23', 'pin = ref')->findAll();
			}
			
			$data = array(
				// 'delegates' => $Delegates->findAll(),
				'delegates' => $record,
				'type' => 'Electronic'
			);

			echo view('stat/header');
			echo view('stat/print', $data);
			echo view('stat/footer');
		} else {
			echo view('stat/login');
		}
	}

	public function printm()
	{
		$logged_in = session()->get('admin_logged_in');
		if ($logged_in) {
			$Delegates = new \App\Models\ManualDel();

			$data = array(
				'delegates' => $Delegates->findAll(),
				'type' => 'Electronic'
			);

			echo view('stat/header');
			echo view('stat/print', $data);
			echo view('stat/footer');
		} else {
			echo view('stat/login');
		}
	}

    public function cert($name)
    {
        // var_dump($name);
        echo view('stat/cert', ['name'=>$name]);
    }

	//--------------------------------------------------------------------

}
