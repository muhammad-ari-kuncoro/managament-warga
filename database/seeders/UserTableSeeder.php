class UserTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
//
User::create([
'name' => 'admin',
'email' => 'admin@admin.com',
'password' => bcrypt('admin123')
]);
}
}
