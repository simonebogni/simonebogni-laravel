<nav class="navbar-custom navbar navbar-expand-md navbar-dark bg-dark fixed-top dir-controller" dir="ltr">
    <a class="logo navbar-brand" href="/about">
        <img src="{{asset("assets/img/logo.svg")}}" alt="SB.dev logo" height="50"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<!--
<Navbar className="navbar-custom" expand="md" dir={dir} fixed="top" dark>
                <NavbarBrand>
                    <NavLink to="/about">
                        <img src={logo} height="50" alt="SB.dev logo"/>
                    </NavLink>
                </NavbarBrand>
                <NavbarToggler onClick={this.handleHamburgerButtonClick}/>
                <Collapse isOpen={this.state.isOpen} navbar>
                    <Nav className={autoMargin} navbar style=textAlign: textAlignDirection>
                        <NavItem>
                            <NavLink to="/about" onClick={this.toggle} dir={dir} className="customNavbarLink" activeClassName="customNavbarActiveLink">{this.state.titles.about[selectedLanguage]}</NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink to="/experience" onClick={this.toggle} dir={dir} className="customNavbarLink" activeClassName="customNavbarActiveLink">{this.state.titles.experience[selectedLanguage]}</NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink to="/softskills" onClick={this.toggle} dir={dir} className="customNavbarLink" activeClassName="customNavbarActiveLink">{this.state.titles.softskills[selectedLanguage]}</NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink to="/portfolio" onClick={this.toggle} dir={dir} className="customNavbarLink" activeClassName="customNavbarActiveLink">{this.state.titles.portfolio[selectedLanguage]}</NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink to="/hobbies" onClick={this.toggle} dir={dir} className="customNavbarLink" activeClassName="customNavbarActiveLink">{this.state.titles.hobbies[selectedLanguage]}</NavLink>
                        </NavItem>
                        <NavItem>
                            <Button id="settingsButton" variant="primary" onClick={this.toggleSettingsModal}>{this.state.titles.settings[selectedLanguage]}</Button>
                        </NavItem>
                        <NavItem>
                            <Dropdown className="navbar-dropdown" isOpen={this.state.dropdownOpen} toggle={this.toggleDropdown}>
                                <DropdownToggle caret>{leftFlag} {this.state.titles.language[this.props.language]} </DropdownToggle>
                                <DropdownMenu right>
                                    <DropdownItem active={this.props.language === "en"} onClick={this.setLanguageEn} dir="ltr">English</DropdownItem>
                                    <DropdownItem active={this.props.language === "it"} onClick={this.setLanguageIt} dir="ltr">Italian</DropdownItem>
                                    <DropdownItem active={this.props.language === "il"} onClick={this.setLanguageIl} dir="rtl">עברית</DropdownItem>
                                </DropdownMenu>
                            </Dropdown>
                        </NavItem>
                    </Nav>
                </Collapse>
            </Navbar>
-->