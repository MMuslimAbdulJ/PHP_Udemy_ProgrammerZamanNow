<?php

namespace Model {
    class Comment
    {
        public function __construct(
            private ?int $id = null,
            private ?string $email = null,
            private ?string $comment = null
        ) {
        }
        public function setId(int $id)
        {
            $this->id = $id;
        }
        public function getId()
        {
            return $this->id;
        }
        public function setEmail(?string $email)
        {
            $this->email = $email;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setComment(?string $email)
        {
            $this->email = $email;
        }
        public function getComment()
        {
            return $this->comment;
        }
    }
}
