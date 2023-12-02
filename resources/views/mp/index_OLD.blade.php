<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar Carteira e Ver Saldo BNB</title>
    <style>
        #connectButton {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
        }
        #connectButton.connected {
            background-color: green;
        }
    </style>
</head>
<body>

<button id="connectButton">Conectar na Carteira</button>
<p id="balance">Saldo BNB: 0</p>

<br><br> <!-- Duas quebras de linha -->
<label for="inputValue">Valor:</label>
<input type="text" id="inputValue">
<button id="queryButton">Consultar</button>
<p id="contractResponse">Resposta do Contrato: </p>


<script src="{{ asset('assets/js/web3.min.js') }}"></script>

<script>
    
    const connectButton = document.getElementById('connectButton');
    const balanceElement = document.getElementById('balance');
    const queryButton = document.getElementById('queryButton');
    const contractResponseElement = document.getElementById('contractResponse');

    let web3;
    let contract;

    // Inicialize o Web3 quando a página for carregada
    window.addEventListener('load', async () => {
        if (window.ethereum) {
            web3 = new Web3(window.ethereum);

            const contractABI = '[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"components":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"internalType":"struct StoreCustomers.Customer","name":"customer","type":"tuple"}],"name":"addCustomer","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"count","outputs":[{"internalType":"uint32","name":"","type":"uint32"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint32","name":"","type":"uint32"}],"name":"customers","outputs":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint32","name":"id","type":"uint32"},{"components":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"internalType":"struct StoreCustomers.Customer","name":"newCustomer","type":"tuple"}],"name":"editCustomer","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint32","name":"id","type":"uint32"}],"name":"getCustomer","outputs":[{"components":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"internalType":"struct StoreCustomers.Customer","name":"","type":"tuple"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint32","name":"id","type":"uint32"}],"name":"removeCustomer","outputs":[],"stateMutability":"nonpayable","type":"function"}]';
            const contractAddress = "0xE9956c971B72aD74F249E616828df613F03E858b";
            contract = new web3.eth.Contract(JSON.parse(contractABI), contractAddress);

            try {
                const accounts = await ethereum.request({ method: 'eth_accounts' });
                if (accounts && accounts.length > 0) {
                    // Conta já conectada
                    connectButton.classList.add('connected');
                    connectButton.textContent = 'Carteira Conectada';
                    getBalance(accounts[0]);
                }
            } catch (error) {
                console.error('Erro ao verificar contas:', error);
            }
            
        } else {
            alert('MetaMask não encontrado');
        }
    });

    connectButton.addEventListener('click', () => {
        if (window.ethereum) {
            window.ethereum.request({ method: 'eth_requestAccounts' })
                .then(accounts => {
                    if (accounts.length > 0) {
                        connectButton.classList.add('connected');
                        connectButton.textContent = 'Carteira Conectada';
                        getBalance(accounts[0]);
                    } else {
                        connectButton.classList.remove('connected');
                        connectButton.textContent = 'Conectar na Carteira';
                        balanceElement.textContent = 'Saldo BNB: 0';
                    }
                })
                .catch(error => {
                    console.error('Erro ao conectar na carteira:', error);
                    connectButton.classList.remove('connected');
                    connectButton.textContent = 'Conectar na Carteira';
                    balanceElement.textContent = 'Saldo BNB: 0';
                });
        } else {
            alert('MetaMask não encontrado');
        }
    });

    function getBalance(account) {
        web3.eth.getBalance(account)
            .then(balance => {
                balanceElement.textContent = `Saldo BNB: ${web3.utils.fromWei(balance, 'ether')}`;
            })
            .catch(error => console.error(error));
    }



    queryButton.addEventListener('click', () => {
        const inputValue = document.getElementById('inputValue').value;

        contract.methods.customers(inputValue).call()
            .then(response => {
                contractResponseElement.textContent = `Resposta do Contrato: ${response.name}, Idade: ${response.age}`;
            })
            .catch(error => {
                console.error('Erro ao consultar o contrato:', error);
                contractResponseElement.textContent = 'Erro ao consultar o contrato';
            });
    });


</script>

</body>
</html>