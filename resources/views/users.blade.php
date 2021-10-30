<?php require '../resources/views/layout/html_head.blade.php'?>

<?php require '../resources/views/layout/nav.blade.php'?>
<div class="min-h-full">
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Users
        </h1>
    </div>
</header>

<main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <h1 class="mt-5 mb-5"><?=$greeting;?></h1>

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Surname
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Odd row -->
                                <?php foreach ($users as $user): ?>
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <?= $user->id;?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?= $user->name;?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?= $user->surname;?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?= $user->email;?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <!-- Even row -->
                                <!--  <tr class="bg-gray-50">
                                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                          Cody Fisher
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                          Product Directives Officer
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                          cody.fisher@example.com
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                          Owner
                                      </td>
                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                          <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                      </td>
                                  </tr> -->

                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<?php require '../resources/views/layout/footer.blade.php'?>
