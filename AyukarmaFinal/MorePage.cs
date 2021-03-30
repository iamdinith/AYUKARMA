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

namespace AyukarmaFinal
{
    public partial class MorePage : Form
    {
        private Form activeForm = null;

        public MorePage()
        {
            InitializeComponent();
        }

        private void openFroms(Form childForm)
        {
            if (activeForm != null)
            {
                activeForm.Close(); // clear-up the varible to store childForm
            }
            activeForm = childForm; // save childForm in activeForm varible
            childForm.TopLevel = false; // stop childForm from behaving like a controler
            childForm.FormBorderStyle = FormBorderStyle.None; // remove childForm borders
            childForm.Dock = DockStyle.Fill; // make childForm fill the entire space
            this.Controls.Add(childForm);
            this.Tag = childForm;
            childForm.BringToFront();
            childForm.Show();
        }

        private void Send_Click(object sender, EventArgs e)
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

        private void gunaButton1_Click(object sender, EventArgs e)
        {
            openFroms(new BuyHomePage());
        }

        private void gunaButton2_Click(object sender, EventArgs e)
        {
            openFroms(new SellHomePage());
        }
    }
}
