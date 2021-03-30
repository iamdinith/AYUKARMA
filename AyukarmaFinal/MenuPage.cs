using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AyukarmaFinal
{
    public partial class MenuPage : Form
    {
        private Form activeForm = null;

        public MenuPage()
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
