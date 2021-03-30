using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AYUKRMA
{
    public partial class Loginwindow : Form
    {
        public Loginwindow()
        {
            InitializeComponent();
        }

        private void gunaButton2_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start(" ");
        }

        private void gunaButton4_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://touch.facebook.com/");
        }

        private void gunaButton3_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.instagram.com/accounts/login/");
        }

        private void gunaButton5_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://twitter.com/login?lang=en-gb");
        }

        private void label4_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://twitter.com/login?lang=en-gb");
        }

        private void gunaButton1_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void gunaButton6_Click(object sender, EventArgs e)
        {
            String username = USERNAME.Text.ToString();
            String password = PASSWORD.Text;

            //string con = ConfigurationManager.ConnectionStrings["DefaultConnection"].ToString();
            SqlConnection con = new SqlConnection(@"Data Source=LAPTOP-85RN73DG;Initial Catalog=AYUKARMA;Integrated Security=True");
            //SqlConnection connection = new SqlConnection(con);
            con.Open();
            //ncrypt the given password
            string passwords = encryption(password);
            String query = "SELECT Username, Password FROM USERS WHERE (Username = '" + username + "') AND (Password = '" + passwords + "');";

            SqlCommand cmd = new SqlCommand(query, con);
            SqlDataReader sqldr = cmd.ExecuteReader();
            if (sqldr.Read())
            {

                homewindow openForm = new homewindow();
                openForm.Show();
                Visible = false;

            }
            else
            {
             //   LABEL10.Text = "User or password is in correct not found";
                USERNAME.Text = "";
                PASSWORD.Text = "";


            }

            con.Close();
        }

        public string encryption(String password)
        {

            MD5CryptoServiceProvider md5 = new MD5CryptoServiceProvider();
            // byte[] encrypt;
            UTF8Encoding encode = new UTF8Encoding();
            //encrypt the given password string into Encrypted data  
            // encrypt = md5.ComputeHash(encode.GetBytes(password));
            byte[] asciiBytes = ASCIIEncoding.ASCII.GetBytes(password);
            byte[] hashedBytes = MD5CryptoServiceProvider.Create().ComputeHash(asciiBytes);
            string hashedString = BitConverter.ToString(hashedBytes).Replace("-", "").ToLower();
            return hashedString.ToString();
        }

        private void USERNAME_Enter(object sender, EventArgs e)
        {
            if (USERNAME.Text == "Enter Your Username Here")
            {
                USERNAME.Text = "";
                USERNAME.ForeColor = Color.Black;
            }
        }

        private void USERNAME_Leave(object sender, EventArgs e)
        {
            if (USERNAME.Text == "")
            {
                USERNAME.Text = "Enter Your Username Here";
                USERNAME.ForeColor = Color.Gray;
            }
        }

        private void PASSWORD_TextChanged(object sender, EventArgs e)
        {

        }

        private void PASSWORD_Enter(object sender, EventArgs e)
        {
            if (PASSWORD.Text == "Enter Your Password Here")
            {
                PASSWORD.Text = "";
                PASSWORD.ForeColor = Color.Black;
                PASSWORD.PasswordChar = '*';
            }
        }

        private void PASSWORD_Leave(object sender, EventArgs e)
        {
            if (PASSWORD.Text == "")
            {
                PASSWORD.Text = "Enter Your Password Here";
                PASSWORD.ForeColor = Color.Gray;
                PASSWORD.PasswordChar = '\0';
            }
        }

        private void gunaElipsePanel2_Paint(object sender, PaintEventArgs e)
        {

        }

        private void gunaButton7_Click(object sender, EventArgs e)
        {

        }

        private void USERNAME_TextChanged(object sender, EventArgs e)
        {

        }

        private void gunaLinkLabel2_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {

        }

        private void gunaLinkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            gunaLinkLabel1.LinkVisited = true;
            System.Diagnostics.Process.Start("http://www.c-sharpcorner.com");
        }
    }
}
