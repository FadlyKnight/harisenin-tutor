<?php

namespace App\Services;

class PostService {

    protected function serviceData(){
        return [
            '1' => [
                'id' => 1,
                'title' => 'Harisenin',
                'content' => 'Harisenin.com adalah Platform Belajar Online yang menawarkan education-to-employment program untuk profesi yang paling banyak dibutuhkan saat ini.'
            ],
            '2' => [
                'id' => 2,
                'title' => 'Laravel',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dolorem, alias adipisci nostrum aliquid dolores debitis velit quia, rem molestiae assumenda vitae? Provident veritatis inventore voluptatibus veniam dolorem, vitae asperiores!'
            ],
            '3' => [
                'id' => 3,
                'title' => 'Lorem',
                'content' => 'Abcdefghijag'
            ],
            '4' => [
                'id' => 4,
                'title' => 'Ipsum',
                'content' => '1234567890'
            ],
        ];
    }

    public function list(){
        return $this->serviceData();
    }
    
    public function detail($id){
        return $this->serviceData()[$id];
    }


}