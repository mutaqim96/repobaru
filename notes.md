# Laravel Notes
* It's note about the laravel stuff I learned. 
* Rujuk git [repo](https://github.com/samtarmizi/laravel-kptm/commits/master?after=497760eb6799d41ca2985045d685a7cd1acc2da8+34&branch=master)

## Make table
* Buat table guna migrations.
* run >>
``` php artisan make:migration create_some_table```

* Kalau nak buat nama terus + --create=table_pluralform
```--create=namatables ```

* pastu kau adjust nak letak apa waktu migrate nanti.
* letak dalam up(). 
* up = migrate; down = rollback
* nullable untuk oprional request field.

## Add Model 
* Satu Model untuk Satu Table.
* Model(singular) ; Table(plural)
* trainig(model) ; trainings(table)
* run >>
```php artisan make:model Training```
* nama model start Huruf besar
* run >>
``` php artisan migrate ```


## Make Factory
* dah ada table, nak masukkan dummy data instead of real data.
* rujuk fzaninotto [faker](https://github.com/fzaninotto/Faker)
* Boleh buat serentak dengan model
* run >>
```php artisan make:model Training --factory```

* nak buat asing
* run >>
```php artisan make:factory TrainingFactory ```

* Isi definition() dengan apa yang kau nak isi. 
* search "factory"

## Use Factory
* Enter into Psy Shell
* run >>
```php artisan tinker ```
* Dalam Psy Shell tu
``` >>> App\Models\NamaModel::factory(bilangan_data)->create() ```

## Make Seeder
* Supaya data tu tak pelik sangat. kita dah ada pattern yang betul.
* run 
``` php artisan make:seeder TrainingSeeder```

* Dalam DatabaseSeeder kene tambah call kepada TrainingSeeder yang kau dah buat tadi dalam run().
* Import Facades\DB punya isi. Supaya boleh access DB
``` use Illuminate\Support\Facades\DB;```

* Dalam function run() letak apa yang nak di insert
  ```
      public function run()
      {
          DB::table('trainings')->insert([
              'title' => 'Training Laravel 7 Days @ KPTM',
              'description' => 'Training Laravel 7 Days @ KPTM is ongoing',
              'trainer' => 'Tarmizi Sanusi'
          ]);
      }```


## Use Seeder
* run >>
  ``` php artisan db:seed```

## Make Authentication
* run all these
```
composer require laravel/ui --dev(optional)
php artisan ui vue --auth
npm install
npm run 
```

* make sure composer / npm kau up to date


<mark>Marked textsdsadasasdafa</mark>
