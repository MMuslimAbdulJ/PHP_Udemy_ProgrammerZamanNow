<?php 

class Address {
    public ?string $country;
}

class User {
    public ?Address $address;
}


// function getCountry(?User $user) {
//     if($user != null) {
//         if($user->address != null) {
//             return $user->address->country;
//         }
//     }
//     return null;
// }
function getCountry(?User $user) {
    return $user?->address?->country;
}
echo getCountry(null);
?>