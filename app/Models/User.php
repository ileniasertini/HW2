<?php 
 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
 
class User extends Model 
{  
    public function carrello() { 
        return $this->hasMany("App\Models\Cart"); 
    } 
} 
 
?>
