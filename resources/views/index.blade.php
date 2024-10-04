<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Transactions</h1>
        <a href="{{ route('transactions.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add Transaction</a>
        <table class="w-full bg-white shadow-md rounded mb-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Date</th>
                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Category</th>
                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Amount</th>
                    <th class="py-2 px-4 bg-gray-200 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->date }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->category->name }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->amount }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $transaction->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>