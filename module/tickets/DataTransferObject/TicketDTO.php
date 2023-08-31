<?php

namespace Module\Ticket\DataTransferObject;

use Exception;

readonly class TicketDTO {
    
    public string $attachment;

    public function __construct(
        public string $name,
        public string $title,
        public string $phone,
        public string $email,
        public string $importance,
        public string $description,
    ){

        $this->sanitizeInputs([$this->name, $this->title, $this->phone, $this->email, $this->importance, $this->description]);
        $this->handleAttachment();
    }    

    public function toArray(): array {
        return [
            'name' => $this->name,
            'title' => $this->title,
            'phone' => $this->phone,
            'email' => $this->email,
            'importance' => $this->importance,
            'description' => $this->description,
            'attachment' => $this->attachment ?? null,
        ];
    }

    //========

    private function sanitizeInputs(array $params) {
        foreach($params as $param) {
            if(strlen($param) === 0) {
                throw new Exception('all inputs are required, except the attachment!!');
            }
        }

    }

    private function handleAttachment() {

        if($_FILES['attachment']['size'] > 0) {

            if ($_FILES['attachment']['error'] !== UPLOAD_ERR_OK) {
                throw new Exception('error uploading your attachment!');
            }

            $this->attachment = $_FILES['attachment']['name'];
        }
    }
}