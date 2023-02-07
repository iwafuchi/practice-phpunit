### Eloquent存在チェック
php artisan tinkerで動作確認

```php
$user = App\Models\User\User::where([['id','=',24],['name','=','Claire Langworth']])->exists();
```