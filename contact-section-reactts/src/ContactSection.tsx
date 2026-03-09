import React from "react";

type ContactSectionProps = {
  kicker?: string;
  title?: string;
  subtitle?: string;
  buttonLabel?: string;
  onSubmit?: (event: React.FormEvent<HTMLFormElement>) => void;
};

const iconUser = "https://www.figma.com/api/mcp/asset/49b8ec48-af63-4857-b251-b91de44efb6a";
const iconMail = "https://www.figma.com/api/mcp/asset/4ac039a1-9296-42d5-9054-d922b090ba5f";
const iconPhone = "https://www.figma.com/api/mcp/asset/9c07ae84-bdef-4787-bd7d-7abc13b69bd2";

export default function ContactSection({
  kicker = "Contact us",
  title = "Lets start working",
  subtitle = "Fill the form and we'll call you as soon as possible.",
  buttonLabel = "Send form",
  onSubmit,
}: ContactSectionProps) {
  return (
    <section className="relative bg-neutral-100 py-16 sm:py-24">
      <div className="mx-auto flex max-w-6xl flex-col items-center gap-10 px-4 sm:px-6 lg:px-8">
        <header className="mx-auto max-w-2xl text-center">
          <p className="text-base font-semibold text-emerald-600">{kicker}</p>
          <h2 className="mt-2 text-4xl font-semibold tracking-tight text-neutral-900 sm:text-5xl">
            {title}
          </h2>
          <p className="mt-3 text-lg text-neutral-500">{subtitle}</p>
        </header>

        <div className="flex w-full justify-center">
          <form
            className="w-full max-w-md space-y-5 rounded-2xl border border-neutral-200 bg-neutral-50/80 p-7 shadow-xl backdrop-blur-sm"
            onSubmit={onSubmit}
          >
            <div className="grid grid-cols-1 gap-5 sm:grid-cols-2">
              <Field label="Name" placeholder="Mayoral" icon={iconUser} name="firstName" />
              <Field label="Last name" placeholder="Ven" icon={iconUser} name="lastName" />
            </div>

            <Field
              label="Mail"
              placeholder="info@mayoralven.com"
              icon={iconMail}
              name="email"
              type="email"
            />

            <Field
              label="Phone number"
              placeholder="123 456 789"
              icon={iconPhone}
              name="phone"
              type="tel"
            />

            <div className="space-y-1.5">
              <label className="block text-sm text-neutral-900" htmlFor="message">
                Label
              </label>
              <div className="rounded-md border border-neutral-300 bg-white px-3 py-2 shadow-sm">
                <textarea
                  id="message"
                  name="message"
                  className="block h-28 w-full resize-none border-0 bg-transparent text-sm text-neutral-700 placeholder-neutral-400 focus:outline-none focus:ring-0"
                  placeholder="Enter a description..."
                />
              </div>
            </div>

            <div className="flex justify-end pt-1">
              <button
                type="submit"
                className="inline-flex items-center justify-center rounded-md bg-neutral-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-neutral-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-900"
              >
                {buttonLabel}
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  );
}

type FieldProps = {
  label: string;
  placeholder: string;
  icon: string;
  name: string;
  type?: React.HTMLInputTypeAttribute;
};

function Field({ label, placeholder, icon, name, type = "text" }: FieldProps) {
  return (
    <div className="space-y-1.5">
      <label className="block text-sm text-neutral-900" htmlFor={name}>
        {label}
      </label>
      <div className="flex items-center gap-2 rounded-md border border-neutral-300 bg-white px-3 py-2 shadow-sm">
        <span className="flex h-5 w-5 items-center justify-center">
          <img src={icon} alt="" className="h-5 w-5" loading="lazy" />
        </span>
        <input
          id={name}
          name={name}
          type={type}
          className="block w-full border-0 bg-transparent text-sm text-neutral-700 placeholder-neutral-400 focus:outline-none focus:ring-0"
          placeholder={placeholder}
        />
      </div>
    </div>
  );
}
