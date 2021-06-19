<?php
class Tentangku
{
    public function index()
    {
        $txt['title'] = "Tentang Ku";
        $txt['active'] = 2;
        $this->render('templates/header', $txt);
        $this->render('pages/tentangku/index');
        $this->render('templates/footer');
    }
    private function render($view, $data = [])
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
