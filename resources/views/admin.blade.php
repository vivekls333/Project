<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-8">
        <h2 class="text-xl font-bold mb-4 text-gray-800">EMI Calculator</h2>
        <form onsubmit="calculateEMI(event)" class="space-y-4">
            <div>
                <label class="block text-gray-700">Loan Amount:</label>
                <input type="number" id="loanAmount" class="w-full border rounded px-3 py-2" placeholder=" Amount" required>
            </div>
            <div>
                <label class="block text-gray-700">Annual Interest Rate:</label>
                <input type="number" step="0.01" id="annualRate" class="w-full border rounded px-3 py-2" placeholder="Interest" required>
            </div>
            <div>
                <label class="block text-gray-700">Loan Tenure:</label>
                <input type="number" id="loanTenure" class="w-full border rounded px-3 py-2" placeholder="Tenure" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Calculate EMI
            </button>
        </form>
        <div id="emiResult" class="mt-4 text-md font-semibold text-gray-800"></div>
    </div>
    
    <script>
        function calculateEMI(event) {
            event.preventDefault();
    
            const P = parseFloat(document.getElementById('loanAmount').value); 
            const annualRate = parseFloat(document.getElementById('annualRate').value); 
            const N = parseInt(document.getElementById('loanTenure').value) * 12; 
            const R = (annualRate / 12) / 100; 
    
            if (P <= 0 || annualRate < 0 || N <= 0) {
                document.getElementById('emiResult').innerText = "Please enter valid input values.";
                return;
            }
    
            const emi = (P * R * Math.pow(1 + R, N)) / (Math.pow(1 + R, N) - 1);
            const totalPayment = emi * N;
            const totalInterest = totalPayment - P;
    
            document.getElementById('emiResult').innerHTML = `
                <p>Monthly EMI: ₹${emi.toFixed(2)}</p>
                <p>Total Payment: ₹${totalPayment.toFixed(2)}</p>
                <p>Total Interest: ₹${totalInterest.toFixed(2)}</p>
            `;
        }
    </script>
    
</x-app-layout>
