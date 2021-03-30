using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Net;
using System.Net.Mail;

namespace Send_An_Email
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void btnSend_Click(object sender, EventArgs e)
        {
            string to, from, pass, mail;
           
            from = (txtSender.Text).ToString();
            mail = (txtMail.Text).ToString();
            pass = (txtPassword.Text).ToString();
            MailMessage message = new MailMessage();
            message.To.Add("rvabeykoon@gmail.com");
            message.From = new MailAddress(from);
            message.Body = mail;
            message.Subject = "ARUKARMA DESKTOP APPLICATION CUSTOMER MASSAGE";
            SmtpClient smtp = new SmtpClient("smtp.gmail.com");
            smtp.EnableSsl = true;
            smtp.Port = 587;
            smtp.DeliveryMethod = SmtpDeliveryMethod.Network;
            smtp.Credentials = new NetworkCredential(from, pass);
            try
            {
                smtp.Send(message);
                MessageBox.Show("Email send successfully", "Email", MessageBoxButtons.OK, MessageBoxIcon.Information);

            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);

            }

        }

        private void txtReceiver_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
