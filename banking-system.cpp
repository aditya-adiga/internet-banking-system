#include<iostream>
#include<fstream>
#include<cctype>
#include<iomanip>
#include<string>
#include<ctime>
using namespace std;

class bank
{
	int bankId;
	string bankName;
	string bankBranch;
	string bankCode;
	string bankPlace;
	string bankType;
	public:
		void addBank();
		void editBank();
		void deleteBank();
};

class services
{
	int serviceId;
	string serviceName;
	string serviceType;
	string serviceDescription;
	int serviceBankId;
	public:
		void addServices();
		void editServices();
		void deleteServices();
		void searchServices();
};

class debit
{
	int debitId;
	string debitDescription;
	int debitAmount;
	string debitName;
	int debitTotal;
	string debitType;
	public:
		void addDebit();
		void editDebit();
		void deleteDebit();
		void searchDebit();
};

class credit 
{
	int creditId;
	string creditDescription;
	int creditAmount;
	string creditName;
	int creditTotal;
	string creditType;
	public:
		void addCredit();
		void editCredit();
		void deleteCredit();
		void searchCredit();
};

class user
{
	int userId;
	int userRoleId;
	string userName;
	string userEmail;
	tm userDob;
	string userAddress;
	public:
		void addUser();
		void editUser();
		void deleteUser();
};

class role 
{
	int roldId;
	string roleTitle;
	string roldDescription;
	public: 
		void addRole();
		void editRole();
		void deleteRole();
		void searchRole();
		void assignRole();
};

class fundTransfer
{
	int transferId;
	string transferType;
	string transferName;
	string transferDescription;
	int transferFund;
	int transferTotal;
	int transferBankId;
	public:
		void addTransfer();
		void editTransfer();
		void deleteTransfer();
};

class permission
{
	int permissionId;
	int permissionRoldId;
	string permissionTitle;
	string permissionModule;
	string permissionDescription;
    public: 
        void addPermission();
        void editPermission();
        void deletePermission();
        void searchPermission();
};

void intro();

int main() 
{
    char ch;
	int num;
	intro();
	do
	{
		system("cls");
		cout<<"\n\n\n\tMAIN MENU";
		// cout<<"\n\n\t01. NEW ACCOUNT";
		// cout<<"\n\n\t02. DEPOSIT AMOUNT";
		// cout<<"\n\n\t03. WITHDRAW AMOUNT";
		// cout<<"\n\n\t04. BALANCE ENQUIRY";
		// cout<<"\n\n\t05. ALL ACCOUNT HOLDER LIST";
		// cout<<"\n\n\t06. CLOSE AN ACCOUNT";
		// cout<<"\n\n\t07. MODIFY AN ACCOUNT";
		// cout<<"\n\n\t08. EXIT";
		// cout<<"\n\n\tSelect Your Option (1-8) ";
		// cin>>ch;
		// system("cls");
		// switch(ch)
		// {
		// case '1':
		// 	// write_account();
		// 	break;
		// case '2':
		// 	cout<<"\n\n\tEnter The account No. : "; cin>>num;
		// 	// deposit_withdraw(num, 1);
		// 	break;
		// case '3':
		// 	cout<<"\n\n\tEnter The account No. : "; cin>>num;
		// 	// deposit_withdraw(num, 2);
		// 	break;
		// case '4': 
		// 	cout<<"\n\n\tEnter The account No. : "; cin>>num;
		// 	// display_sp(num);
		// 	break;
		// case '5':
		// 	// display_all();
		// 	break;
		// case '6':
		// 	cout<<"\n\n\tEnter The account No. : "; cin>>num;
		// 	// delete_account(num);
		// 	break;
		//  case '7':
		// 	cout<<"\n\n\tEnter The account No. : "; cin>>num;
		// 	// modify_account(num);
		// 	break;
		//  case '8':
		// 	cout<<"\n\n\tThanks for using bank managemnt system";
		// 	break;
		//  default :cout<<"\a";
		// }
		cin.ignore();
		cin.get();
    }while(ch!='8');
	return 0;

    // intro();
	// do
	// {
	// 	system("cls");
    //     cout<<"\n\n\n\tMAIN MENU";
    //     cin.ignore();
	// 	cin.get();
    // } while (true);

    // return 0;
}

void intro()
{
	cout<<"\n\n\n\t INTERNET ";
	cout<<"\n\n\t  BANKING";
	cout<<"\n\n\t  SYSTEM";
	cout<<"\n\n\n\nMADE BY : Yashas Uttangi, Aditya Adiga, Danussh M";
	cout<<"\n\nCOLLEGE : JSS SCIENCE AND TECHNOLOGY UNIVERSITY";
	cin.get();
}


