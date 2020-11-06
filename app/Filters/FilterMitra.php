<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterMitra implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        //jika level 0 maka belum login berarti
        if(session()->get('level') == "" ){
            session()->setFlashdata('pesan', 'Silahkan login terlebih dahulu!');
            return redirect()->to('auth/login');
        }
    }
    
    //--------------------------------------------------------------------
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        //jika level 1 maka 
                if(session()->get('level') == 3){
                    return redirect()->to('/home');
                }
    }
}