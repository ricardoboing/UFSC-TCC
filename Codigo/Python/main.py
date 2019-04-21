import socket

SERVER_HOST = "yyy.yyy.yyy.yyy"
SERVER_PORT = 8081

def ativar_servidor():
    serverSocket = socket.socket()
    serverSocket.bind((SERVER_HOST, SERVER_PORT))
    serverSocket.listen()
    
    while True:
        conexao = serverSocket.accept()[0]
        
        length_pacote = conexao.recv(3).decode('utf-8')
        operacao = conexao.recv(1).decode('utf-8')

        # INSERIR EVENTO
        if operacao == 'a':
            print("_INSERIR EVENTO");
            val_enviar = "1"
            conexao.sendall(val_enviar.encode());
        # REMOVER EVENTO
        elif operacao == 'b':
            print("_REMOVER EVENTO");
        # UPDATE EVENTO
        elif operacao == 'c':
            print("_UPDATE EVENTO");
        # UPDATE TARIFA
        elif operacao == 'd':
            print("_UPDATE TARIFA");
        # SELECT_ALL EVENTO NO BANCO DE DADOS
        elif operacao == 'g':
            print("_SELECT_ALL EVENTO")
            val_enviar = "01001019542217"
            conexao.sendall(val_enviar.encode());
        elif operacao == 'e':
            print("_SELECT ESTIMATIVA DE CONSUMO")
            val_enviar = "abcdefghij123456089" #00001111 00001111 000
            conexao.sendall(val_enviar.encode());
        elif operacao == 'f':
            print("_SELECT EVENTO");



        print ("\n")
        conexao.close()
    serverSocket.close()

if __name__ == "__main__":
	ativar_servidor()
