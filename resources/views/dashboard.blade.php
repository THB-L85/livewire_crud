<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <button type="button" class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Primary</button>
        <table class="w-full text-left text-sm text-on-surface dark:text-on-surface-dark">
            <thead class=" bg-surface-alt text-sm text-on-surface-strong dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
                <tr>
                    <th scope="col" class="p-4">CustomerID</th>
                    <th scope="col" class="p-4">Name</th>
                    <th scope="col" class="p-4">Email</th>
                    <th scope="col" class="p-4">Membership</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline dark:divide-outline-dark">
                    <tr>
                        <td class="p-4">2335</td>
                        <td class="p-4">Alice Brown</td>
                        <td class="p-4">alice.brown@gmail.com</td>
                        <td class="p-4">Silver</td>
                    </tr>
                    <tr>
                        <td class="p-4">2338</td>
                        <td class="p-4">Bob Johnson</td>
                        <td class="p-4">johnson.bob@outlook.com</td>
                        <td class="p-4">Gold</td>
                    </tr>
                    <tr>
                        <td class="p-4">2342</td>
                        <td class="p-4">Sarah Adams</td>
                        <td class="p-4">s.adams@gmail.com</td>
                        <td class="p-4">Gold</td>
                    </tr>
            </tbody>
        </table>
    </div>
</x-layouts::app>
