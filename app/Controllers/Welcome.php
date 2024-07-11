<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Welcome extends Controller
{
    public function index()
    {
        helper(['form', 'url']);
        $data = [];

        if ($this->request->getMethod() === 'POST' && $this->validate([
                'name'      => 'required',
                'lastname'  => 'required',
                'address'   => 'required',
                'cellphone' => 'required',
            ])) {
            // Handle file upload (if any)
            $picture = $this->request->getFile('picture');
            if ($picture->isValid() && ! $picture->hasMoved()) {
                $newName = $picture->getRandomName();
                $picture->move(ROOTPATH . 'assets/img/uploads', $newName);
                $data['picture'] = $newName;
            }

            // Display submitted data
            $data['name'] = $this->request->getPost('name');
            $data['lastname'] = $this->request->getPost('lastname');
            $data['address'] = $this->request->getPost('address');
            $data['cellphone'] = $this->request->getPost('cellphone');

            $model = new UserModel();
            $model->insert($data);

            return view('welcome_message', $data);
        }

        $model = new UserModel();
        $data['users'] = $model->getUsers();

        return view('welcome_form', $data);
    }
}
?>
