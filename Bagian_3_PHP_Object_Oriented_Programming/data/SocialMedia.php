<?php 
class SocialMedia {

}

final class Twitter {

}

// class FakeTwitter extends Twitter {

// }
// error

class Facebook extends SocialMedia {
    final public function login(string $name, string $password) : bool {
        return true;
    }
}

class FakeFacebook extends Facebook {
    // error
    // public function login(string $name, string $password) : bool {
    //     return true;
    // }
}

?>