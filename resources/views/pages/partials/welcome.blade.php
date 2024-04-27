<div class="w-full">
    <div class="bg-card p-6 shadow rounded-lg">
        <div class="space-y-2">
            <h1 class='text-2xl font-semibold'>
               Selamat datang <div class="text-primary font-bold inline">{{ $current_user->name }}</div> Di sistem pendaftaran siswa baru 2023/2024 🙌
            </h1>
            <p>
                Silahkan lanjut mengisi form pendaftaran. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi similique, distinctio repellendus culpa libero doloremque optio tenetur obcaecati ea adipisci voluptatibus vitae, eveniet accusantium pariatur maiores a voluptatem magni!
            </p>
        </div>
        <div class="mt-2">
        <x-button variant="destructive" size="sm">
            <div class="flex gap-1 items-center">
                <i class="pi pi-file-edit"></i>
                <span>Buat Formulir</span>
            </div>
        </x-button>
        </div>
    </div>
</div>