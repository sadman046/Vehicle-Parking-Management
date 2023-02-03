#include <iostream>
#include <fstream>
using namespace std;

int main()
{
    ofstream outfile;
    outfile.open("add-drop.sql");
    int chose,addchose,dropchose;
    int i,n,last,first;
    cout<<"1. Add Slot"<<endl;
    cout<<"2. Drop Slot"<<endl;
    cout<<"Chose: ";
    cin>>chose;
    cout<<endl<<endl;

    switch(chose)
    {
    case 1:
        {
            cout<<"1. Car"<<endl;
            cout<<"2. Car Large"<<endl;
            cout<<"3. Bike"<<endl;
            cout<<"Chose: ";
            cin>>addchose;
            cout<<endl;
            switch(addchose)
            {
            case 1:
                {
                  cout<<"Enter The Starting Slot Number: ";
                  cin>>first;
                  cout<<"Enter The Ending Slot Number: ";
                  cin>>last;

                  for( i=first; i<=last; i++)
                  {
                  cout<<"INSERT INTO `car` (`CarSlot`, `slot`) VALUES ('C"<<i<<"', '0');"<<endl;
                  outfile<<"INSERT INTO `car` (`CarSlot`, `slot`) VALUES ('C";
                  outfile<<i;
                  outfile<<"', '0');"<<endl;
                  }

                  break;
                }
            case 2:
                {
                  cout<<"Enter The Starting Slot Number: ";
                  cin>>first;
                  cout<<"Enter The Ending Slot Number: ";
                  cin>>last;

                 for( i=first; i<=last; i++)
                  {
                      cout<<"INSERT INTO `carlarge` (`CarSlot`, `slot`) VALUES ('CL"<<i<<"', '0');"<<endl;
                      outfile<<"INSERT INTO `carlarge` (`CarSlot`, `slot`) VALUES ('CL";
                      outfile<<i;
                      outfile<<"', '0');"<<endl;

                  }

                  break;
                }
            case 3:
                {
                  cout<<"Enter The Starting Slot Number: ";
                  cin>>first;
                  cout<<"Enter The Ending Slot Number: ";
                  cin>>last;
                  for( i=first; i<=last; i++)
                  {
                      cout<<"INSERT INTO `bike` (`CarSlot`, `slot`) VALUES ('B"<<i<<"', '0');"<<endl;
                      outfile<<"INSERT INTO `bike` (`CarSlot`, `slot`) VALUES ('B";
                      outfile<<i;
                      outfile<<"', '0');"<<endl;
                  }

                  break;
                }
             default:
                cout<<"Invalid Input...."<<endl;

            }

           break;
        }
    case 2:
        {
            cout<<"1. Car"<<endl;
            cout<<"2. Car Large"<<endl;
            cout<<"3. Bike"<<endl;
            cout<<"Chose: ";
            cin>>addchose;
            cout<<endl;
            switch(addchose)
            {
            case 1:
                {
                  cout<<"Enter The Starting Slot Number: ";
                  cin>>first;
                  cout<<"Enter The Ending Slot Number: ";
                  cin>>last;
                  for(int i=first; i<=last; i++)
                  {
                      cout<<"DELETE FROM `car` WHERE `car`.`CarSlot` = 'C"<<i<<"';"<<endl;
                      outfile<<"DELETE FROM `car` WHERE `car`.`CarSlot` = 'C";
                      outfile<<i;
                      outfile<<"';"<<endl;
                  }


                  break;
                }
            case 2:
                {
                  cout<<"Enter The Starting Slot Number: ";
                  cin>>first;
                  cout<<"Enter The Ending Slot Number: ";
                  cin>>last;
                  for(int i=first; i<=last; i++)
                  {
                      cout<<"DELETE FROM `car` WHERE `car`.`CarSlot` = 'CL"<<i<<"';"<<endl;
                      outfile<<"DELETE FROM `car` WHERE `car`.`CarSlot` = 'CL";
                      outfile<<i;
                      outfile<<"';"<<endl;

                  }

                  break;
                }
            case 3:
                {
                  cout<<"Enter The Starting Slot Number: ";
                  cin>>first;
                  cout<<"Enter The Ending Slot Number: ";
                  cin>>last;
                  for(int i=first; i<=last; i++)
                  {
                      cout<<"DELETE FROM `car` WHERE `car`.`CarSlot` = 'B"<<i<<"';"<<endl;
                      outfile<<"DELETE FROM `car` WHERE `car`.`CarSlot` = 'B";
                      outfile<<i;
                      outfile<<"';"<<endl;
                  }

                  break;
                }
             default:
                cout<<"Invalid Input...."<<endl;

            }

            break;
        }
    default:
           cout<<"Invalid Input...."<<endl;
    }


    return 0;
}
