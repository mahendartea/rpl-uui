<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // Applicant permissions
            'view applicant dashboard',
            'manage applicant profile',
            'upload applicant documents',
            'download applicant documents',

            // Assessor permissions
            'view assessor dashboard',
            'view all applications',
            'verify documents',
            'assess applications',
            'update application status',
            'add assessor notes',

            // Admin permissions
            'view admin dashboard',
            'manage users',
            'manage roles',
            'manage permissions',
            'manage study programs',
            'manage graduate categories',
            'view all data',
            'manage system settings',
            'export reports',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions

        // Admin role - has all permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        // Assessor role - can assess applications and verify documents
        $assessorRole = Role::create(['name' => 'assessor']);
        $assessorRole->givePermissionTo([
            'view assessor dashboard',
            'view all applications',
            'verify documents',
            'assess applications',
            'update application status',
            'add assessor notes',
        ]);

        // Applicant role - can manage their own profile and documents
        $applicantRole = Role::create(['name' => 'applicant']);
        $applicantRole->givePermissionTo([
            'view applicant dashboard',
            'manage applicant profile',
            'upload applicant documents',
            'download applicant documents',
        ]);

        // Create default admin user
        $adminUser = User::create([
            'name' => 'Admin RPL UUI',
            'email' => 'admin@uui.ac.id',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);
        $adminUser->assignRole('admin');

        // Create default assessor users
        $assessor1 = User::create([
            'name' => 'Dr. Ahmad Fauzi, M.Pd',
            'email' => 'ahmad.fauzi@uui.ac.id',
            'password' => bcrypt('assessor123'),
            'email_verified_at' => now(),
        ]);
        $assessor1->assignRole('assessor');

        $assessor2 = User::create([
            'name' => 'Dr. Siti Rahmawati, M.Si',
            'email' => 'siti.rahmawati@uui.ac.id',
            'password' => bcrypt('assessor123'),
            'email_verified_at' => now(),
        ]);
        $assessor2->assignRole('assessor');

        // Create sample applicant users
        $applicant1 = User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@gmail.com',
            'password' => bcrypt('pendaftar123'),
            'email_verified_at' => now(),
        ]);
        $applicant1->assignRole('applicant');

        $applicant2 = User::create([
            'name' => 'Dewi Kusuma',
            'email' => 'dewi.kusuma@yahoo.com',
            'password' => bcrypt('pendaftar123'),
            'email_verified_at' => now(),
        ]);
        $applicant2->assignRole('applicant');

        $applicant3 = User::create([
            'name' => 'Rizki Pratama',
            'email' => 'rizki.pratama@gmail.com',
            'password' => bcrypt('pendaftar123'),
            'email_verified_at' => now(),
        ]);
        $applicant3->assignRole('applicant');
    }
}
