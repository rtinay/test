<?php
	namespace test\MyBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class TestController extends Controller {
		public function indexAction() {
			$jobname = 'j1';
			set_time_limit(0);
			$secs = 60;
			while ($secs) {
			        echo $jobname,'::', $secs,"\n";
			        flush(); 
			        ob_flush();  ## make sure that all output is sent in real-time
			        $secs -= 1;
			        $t = time();
			        sleep(1); // pause
			}
	        return $this->render('testMyBundle:Test:test.html.twig', array('page_title' => 'Hello test'));
	    }
	}