<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto p-6 bg-white rounded shadow">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Compound interest calculator</h2>
        <form onsubmit="calculateCompoundInterest(event)" class="space-y-4">
            <div>
                <label class="block text-gray-700">Principal Amount :</label>
                <input type="number" id="principal" class="w-full border rounded px-3 py-2" placeholder="Principal" required>
            </div>
            <div>
                <label class="block text-gray-700">Annual Interest Rate :</label>
                <input type="number" step="0.01" id="rate" class="w-full border rounded px-3 py-2" placeholder="Interest Rate" required>
            </div>
            <div>
                <label class="block text-gray-700">Number of Years:</label>
                <input type="number" id="years" class="w-full border rounded px-3 py-2" placeholder="Years" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Calculate
            </button>
        </form>
        <div id="result" class="mt-4 text-md font-semibold text-gray-800"></div>
    </div>
    
    <script>
        function compoundInterest(principalAmount, annualInterestRate, numberOfYears) {
            let answer = principalAmount;
            for (let i = 0; i < numberOfYears; i++) {
                answer += answer * annualInterestRate;
            }
            return answer;
        }
    
        function calculateCompoundInterest(event) {
            event.preventDefault();
    
            const principal = parseFloat(document.getElementById('principal').value);

            const rate = parseFloat(document.getElementById('rate').value) / 100; 

            const years = parseInt(document.getElementById('years').value);
    
            if (principal <= 0 || rate < 0 || years <= 0) {


                    document.getElementById('result').innerText = "Please enter valid input values.";
                return;
            }
    
            const total = compoundInterest(principal, rate, years);

            const interest = total - principal;
    
            document.getElementById('result').innerHTML = `
                Total Amount after ${years} years: ₹${total.toFixed(2)} <br>
                Total Interest Earned: ₹${interest.toFixed(2)}

                
            `;
        }
    </script>
    

    
</x-app-layout>
