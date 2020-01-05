using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Myfridge
{
    #region Messages
    public class Messages
    {
        #region Member Variables
        protected int _mes_id;
        protected string _message;
        protected string _user;
        #endregion
        #region Constructors
        public Messages() { }
        public Messages(string message, string user)
        {
            this._message=message;
            this._user=user;
        }
        #endregion
        #region Public Properties
        public virtual int Mes_id
        {
            get {return _mes_id;}
            set {_mes_id=value;}
        }
        public virtual string Message
        {
            get {return _message;}
            set {_message=value;}
        }
        public virtual string User
        {
            get {return _user;}
            set {_user=value;}
        }
        #endregion
    }
    #endregion
}
